<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Image;
use App\Services\Uploader\StorageManager;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
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

    public function index()
    {
        return view('developer.index');
    }

    public function listProject()
    {
        $build = Build::where('developer', auth()->user()->id)->get();
        $build->load('cover');
//        dd($build->load('cover'));
        return view('developer.project.list', compact('build'));
    }

    public function addProject()
    {
        return view('developer.project.add');
    }

    public function createProject(Request $request)
    {

        $this->createBuild($request);


    }

    private function createBuild($request)
    {

        $build = [
            'name' => $request->title,
            'location' => $request->location,
            'deposit' => $request->deposit,
            'assignment' => $request->assignment,
            'maintenance' => $request->maintenance,
            'completion_date' => $request->completionDate,
            'type' => $request->typeof,
            'tower' => 1,
            'pet' => $request->pet,
            'slug' => Str::slug($request->title),
            'promotion_text' => $request->promotion,
            'developer' => auth()->user()->id
        ];

        $build = Build::create($build);


        if ($build->exists) {

            $this->uploadImages($request, $build->id);

        };
    }

    private function uploadImages($request, $buildId)
    {

        $this->uploadCover($request, $buildId);
        $this->uploadBuildImages($request, $buildId);
        $this->uploadPromotionCover($request, $buildId);
    }

    private function uploadPromotionCover($request, $buildId)
    {
        if (is_null($request->promotion)) return false;

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

    private function uploadBuildImages($request, $buildId)
    {
        if (is_null($request->file)) return false;
        $data = [];
        foreach ($request->file as $img) {
            $data[] = [
                'name' => $img->getClientOriginalName(),
                'alt_text' => $img->getClientOriginalName(),
                'slug' => 'image' . DIRECTORY_SEPARATOR . $img->getClientOriginalName(),
                'imageable_type' => 'App\Models\Build',
                'imageable_id' => $buildId,
                'tag' => ''
            ];

        }
        DB::table('images')->insert($data);
    }

    private function uploadCover($request, $buildId)
    {
        if (is_null($request->cover)) return false;
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
}
