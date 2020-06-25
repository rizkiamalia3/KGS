<?php

namespace App\Http\Controllers;
use Auth;
use Alert;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();

    	return view('user.profile', compact('user'));
    }

    public function update(Request $request)
    {
    	$user = User::where('user_id', Auth::user()->user_id)->first();
    	$user->name = $request->name;
    	$user->email = $request->email;
        $user->no_hp = $request->no_hp;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->jenis_kelamin = $request->jenis_kelamin;

    	$user->update();

    	alert()->success('User Sukses diupdate', 'Success');
    	return redirect('user/profile');
    }
}
