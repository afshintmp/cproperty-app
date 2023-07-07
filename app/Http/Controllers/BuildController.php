<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Info;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Build;
use Illuminate\Http\Request;

class BuildController extends Controller
{

    public function show1()
    {
        $build = DB::table('builds');


        if (isset($_GET['sum_deposit'])) {
            if (in_array('a', $_GET['sum_deposit'])) {
                $build->where('sum_deposit', '<', 5);
            }
            if (in_array('b', $_GET['sum_deposit'])) {
                $build->orWhereBetween('sum_deposit', ['5', '10']);

            }
            if (in_array('c', $_GET['sum_deposit'])) {
                $build->orWhereBetween('sum_deposit', ['10', '15']);
            }
            if (in_array('d', $_GET['sum_deposit'])) {
                $build->orWhereBetween('sum_deposit', ['15', '20']);
            }
            if (in_array('e', $_GET['sum_deposit'])) {
                $build->orWhere('sum_deposit', '<', '20');
            }

        }

        if (isset($_GET['city'])) {

            $build->whereIn('city_id', $_GET['city']);
        }

        if (isset($_GET['start_completion_date'])) {
            $build->whereBetween('completion_year', [$_GET['start_completion_date'], $_GET['end_completion_date']]);


        }


//        dump($build->get());
        $builds = $build->paginate(9);

//        dump($builds);
        $cities = City::all();

        return view('build.list', compact('builds', 'cities'));
    }

    public function show(Request $request, int $id)
    {
        $build = Build::find($id);
        $build->load(['images', 'units', 'features']);
//        dump($build->user_id);
        $user = User::where('id', $build->user_id)->first();

        $user_active = $user->isActiveGG();
        $info = Info::where('user_id', $build->user_id)->first();
//        $user_active = false;


        $unitArray = ($build->units->toArray());
        $unitObject = [];
        foreach ($unitArray as $item) {
            $unitObject[$item['id']] = $item;
        }
        return view('build.show', compact('build', 'unitObject' , 'user_active' , 'info'));
    }
}
