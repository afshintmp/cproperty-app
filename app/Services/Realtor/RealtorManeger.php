<?php

namespace App\Services\Realtor;

use App\Models\Info;
use App\Services\Admin\Traits\User;
use http\Exception\RuntimeException;
use Illuminate\Http\Request;
use Mockery\Exception;

class RealtorManeger
{
    private $request;

    public function __construct(Request $request)

    {
        $this->request = $request;
    }


    public function saveContactInfo($request)
    {
//        dd($request->all());
        $request->validate([
            'email' => ['required', 'exists:users,email'],
            'phone' => ['required']
        ]);
        if (auth()->user()->email !== $request->email) {

        }



        Info::create();

        dump('no');
    }
}
