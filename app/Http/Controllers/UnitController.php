<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Unit;
use App\Services\Uploader\StorageManager;
use App\Services\Uploader\Uploader;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class UnitController extends Controller
{
    private $uploader;
    private $storageManager;

    public function __construct(Uploader $uploader, StorageManager $storageManager)
    {
        $this->uploader = $uploader;
        $this->storageManager = $storageManager;
    }


    public function list(Build $build)
    {
        $build->load('phases');
        return view('developer.units.list', compact('build'));
    }

    public function create(Request $request, Build $build)
    {


        $request->validate([
            'name' => ['required'],
            'floor_plan' => ['required']
        ]);
//        dd($request->all());
        $data = $request->all('name', 'start_price', 'end_price', 'start_size', 'end_size', 'start_storage', 'end_storage',
            'start_parking', 'end_parking', 'start_bedroom', 'end_bedroom', 'start_bathroom', 'end_bathroom', 'start_dens', 'end_dens', 'start_flex', 'end_flex',
            'start_garden', 'end_garden', 'start_balcony', 'end_balcony');

//        dd($data);
        $endData = [];
        $floor_plan = $this->uploadFloorPlan($request);

        foreach ($request->floor as $floor) {

            $data = $request->all('name', 'start_price', 'end_price', 'start_size', 'end_size', 'start_storage', 'end_storage',
                'start_parking', 'end_parking', 'start_bedroom','end_bedroom', 'start_bathroom', 'end_bathroom', 'start_dens', 'end_dens', 'start_flex', 'end_flex',
                'start_garden', 'end_garden', 'start_balcony', 'end_balcony');
            $data['floor_plan'] = $floor_plan;
            $data['phase_id'] = $request->phase;
            $data['floor'] = $floor;
//            $data['name'] = $request->name;
            $endData[] = $data;
            $build->units()->create($data);
        }

//        dd($endData);


        return redirect()->route('developer.unit.list', $build->id)->with('success', 'Unit was craate');

    }

    public function add(Build $build)
    {

        $build->load('phases');

        return view('developer.units.add2', compact('build'));
    }


    private function uploadFloorPlan($request)
    {
        $this->storageManager->putFileAsPublic($request->floor_plan->getClientOriginalName(), $request->floor_plan, 'image');
        return 'image' . DIRECTORY_SEPARATOR . $request->floor_plan->getClientOriginalName();

    }
}
