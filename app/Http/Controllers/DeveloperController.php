<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\City;
use App\Models\Deposit;
use App\Models\Feature;
use App\Models\Image;
use App\Services\Uploader\StorageManager;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isNull;

class DeveloperController extends Controller
{
    private $uploader;
    private $storageManager;

    public function __construct(Uploader $uploader, StorageManager $storageManager)
    {
        $this->uploader = $uploader;
        $this->storageManager = $storageManager;
    }


    public function editProject(Build $build)
    {
        $build->load(['deposits', 'phases', 'cover' , 'features']);
        $features = Feature::all();
        return view('developer.project.edit', compact('features', 'build'));
    }


    public function updateProject(Request $request, Build $build)
    {

        $this->updateBuild($request, $build);
        return back();
    }

    public function index()
    {
        return view('developer.index');
    }

    public function listProject()
    {

        $build = auth()->user()->builds()->get();
        $build->load('cover');

        return view('developer.project.list', compact('build'));
    }

    public function addProject()
    {
        $features = Feature::all();
        return view('developer.project.add', compact('features'));
    }

    public function createProject(Request $request)
    {

        $this->createBuild($request);
        return redirect()->route('developer.project.list')->with('success', 'build was create');

    }

    private function createBuild($request)
    {

        $city = City::firstOrCreate([
            'name' => $request->city
        ]);

        $request->validate([
            'name' => ['required'],
            'location' => ['required'],
            'depositNumber' => ['required'],
            'depositText' => ['required'],
            'phasesType' => ['required'],
            'phasesName' => ['required'],
            'completion_date' => ['required'],
            'cover' => ['required'],
            'city' => ['required'],
            'place_id' => ['required'],
        ]);


        $build = $request->all('name', 'location', 'assignment', 'completion_date', 'pet', 'promotion_text',
            'promotion_title', 'maintenance', 'description' , 'place_id' , 'feature_text');
        $build['slug'] = Str::slug($request->name);
        $build['city_id'] = $city->id;

        $build = Build::create($build);

        if (!empty($request->feature)) {
            $build->features()->sync($request->feature);
        }


        $depositNum = $request->depositNumber;
        $depositTxt = $request->depositText;
        $date = [];
        foreach ($depositNum as $key => $num) {
            $date[] = ['number' => $num, 'text' => $depositTxt[$key]];
        }


        $build->deposits()->createMany($date);

        $phasesType = $request->phasesType;
        $phasesName = $request->phasesName;
        $phasesData = [];
        foreach ($phasesType as $key => $type) {
            $phasesData[] = ['type' => $type, 'name' => $phasesName[$key]];
        }
        $build->phases()->createMany($phasesData);

        $build->user()->associate(auth()->user());
        $build->save();


        if ($build->exists) {

            $this->uploadImages($request, $build->id);

        };


    }

    private function updateBuild($request, $build)
    {
        $request->validate([
            'name' => ['required'],
            'location' => ['required'],
            'depositNumber' => ['required'],
            'depositText' => ['required'],
            'phasesType' => ['required'],
            'phasesName' => ['required'],
            'completion_date' => ['required'],
            'place_id' => ['required'],
            'city' => ['required'],

        ]);

        $buildData = $request->all('name', 'location', 'assignment', 'completion_date', 'pet', 'promotion_text',
            'promotion_title', 'maintenance', 'description' , 'feature_text');

        $buildData['slug'] = Str::slug($request->name);

        if ($request->city !== 'stable'){
            $city = City::firstOrCreate([
                'name' => $request->city
            ]);
            $build['city_id'] = $city->id;
        }
        if ($request->place_id !== 'stable'){
            $build['place_id'] = $request->place_id;
        }

        $build->update($buildData);


        $build->features()->sync($request->feature);

        $depositNum = $request->depositNumber;
        $depositTxt = $request->depositText;
        $date = [];
        foreach ($depositNum as $key => $num) {
            $date[] = ['number' => $num, 'text' => $depositTxt[$key]];
        }
        $build->deposits()->delete();
        $build->deposits()->createMany($date);


        $phasesType = $request->phasesType;
        $phasesName = $request->phasesName;
        $phasesData = [];
        foreach ($phasesType as $key => $type) {
            $phasesData[] = ['type' => $type, 'name' => $phasesName[$key]];
        }
        $build->phases()->delete();
        $build->phases()->createMany($phasesData);

        if ($build->exists) {

            $this->uploadImages($request, $build->id);
        }

    }


    private function uploadImages($request, $buildId)
    {

        $this->uploadCover($request, $buildId);
        $this->uploadBuildImages($request, $buildId);
        $this->uploadPromotionCover($request, $buildId);
    }

    private function uploadPromotionCover($request, $buildId)
    {
        if (!is_null($request->promotion) && $request->promotion !== 'stable') {

            $this->storageManager->putFileAsPublic($request->promotion->getClientOriginalName(), $request->promotion, 'image');
            $data = [
                'name' => $request->promotion->getClientOriginalName(),
                'alt_text' => $request->promotion->getClientOriginalName(),
                'slug' => 'image' . DIRECTORY_SEPARATOR . $request->promotion->getClientOriginalName(),
                'imageable_type' => 'App\Models\Build',
                'imageable_id' => $buildId,
                'tag' => 'promotion'
            ];
            DB::table('images')->insert($data);

        }
        if (is_null($request->promotion)) {
            DB::table('images')->where([
                ['imageable_id', $buildId],
                ['imageable_type', 'App\Models\Build'],
                ['tag', 'promotion'],
            ])->delete();
        }

    }

    private function uploadBuildImages($request, $buildId)
    {


        if (!is_null($request->images)) {

            $data = [];
            $stable = [];
            foreach ($request->images as $img) {
                if (is_string($img)) {
                    $stable[] = $img;

                } else {
                    $this->storageManager->putFileAsPublic($img->getClientOriginalName(), $img, 'image');
                    $data[] = [
                        'name' => $img->getClientOriginalName(),
                        'alt_text' => $img->getClientOriginalName(),
                        'slug' => 'image' . DIRECTORY_SEPARATOR . $img->getClientOriginalName(),
                        'imageable_type' => 'App\Models\Build',
                        'imageable_id' => $buildId,
                        'tag' => ''
                    ];

                };


            }
            if (!empty($stable)) {

                DB::table('images')->whereNotIn('id', $stable)->where([
                    ['imageable_id', $buildId],
                    ['imageable_type', 'App\Models\Build'],
                    ['tag', ''],
                ])->delete();
            }
            DB::table('images')->insert($data);

        } else {
            DB::table('images')->where([
                ['imageable_id', $buildId],
                ['imageable_type', 'App\Models\Build'],
                ['tag', ''],
            ])->delete();
        }

    }

    private function uploadCover($request, $buildId)
    {

        if (!is_null($request->cover) && $request->cover !== 'stable') {
            $this->storageManager->putFileAsPublic($request->cover->getClientOriginalName(), $request->cover, 'image');
            $data = [
                'name' => $request->cover->getClientOriginalName(),
                'alt_text' => $request->cover->getClientOriginalName(),
                'slug' => 'image' . DIRECTORY_SEPARATOR . $request->cover->getClientOriginalName(),
                'imageable_type' => 'App\Models\Build',
                'imageable_id' => $buildId,
                'tag' => 'cover'
            ];
            DB::table('images')->insert($data);
        }
        if (is_null($request->cover)) {
            DB::table('images')->where([
                ['imageable_id', $buildId],
                ['imageable_type', 'App\Models\Build'],
                ['tag', 'cover'],
            ])->delete();
        }

    }


}
