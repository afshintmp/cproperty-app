<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Services\Realtor\RealtorManeger;
use App\Services\Uploader\StorageManager;
use App\Services\Uploader\Uploader;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealtorController extends Controller
{
    protected $realtor;
    private $uploader;
    private $storageManager;


    public function __construct(RealtorManeger $realtor, Uploader $uploader, StorageManager $storageManager)
    {
        $this->realtor = $realtor;
        $this->uploader = $uploader;
        $this->storageManager = $storageManager;
    }

    public function index()
    {
        $user = auth()->user();
        $info = Info::where('user_id', $user->id)?->first();
        return view('realtor.index', compact('user', 'info'));
    }

    public function viewProfile()
    {
        return view('realtor.profile.list');
    }

    public function generalInfoStore(Request $request)
    {

        $request->validate([
            'fullName' => ['required'],
            'cover' => ['required'],
            'displayName' => ['required'],
            'email' => ['required'],
        ]);

        $this->storageManager->putFileAsPublic($request->cover->getClientOriginalName(), $request->cover, 'image');

        $user = User::where('email', $request->email)->firstorfail();
        $user_id = $user->id;

        $data = [
            'user_id' => $user_id,
            'full_name' => $request->fullName,
            'display_name' => $request->displayName,
            'image' => 'image' . DIRECTORY_SEPARATOR . $request->cover->getClientOriginalName(),
            'image_name' => $request->cover->getClientOriginalName(),
            'status' => 0
        ];

        DB::table('infos')->updateOrInsert([
            'user_id' => $user_id,
        ], $data);
        return redirect()->back()->with('success', 'profile was updated');
    }

    public function contactInfoStore(Request $request)
    {

        $request->validate([
            'email' => ['required', 'exists:users,email'],
            'phone' => ['required']
        ]);
        $user = User::where('email', $request->email)->firstorfail();
        $user_id = $user->id;
        $data = [
            'user_id' => $user_id,
            'status' => 0,
            'phone' => $request->phone,


        ];
        DB::table('infos')->updateOrInsert([
            'user_id' => $user_id,
        ], $data);
        return redirect()->back()->with('success', 'profile was updated');

//        $this->realtor->saveContactInfo($request);


    }
}
