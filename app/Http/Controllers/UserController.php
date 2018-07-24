<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use App\Service;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show user dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    public function profile()
    {
        $user       = Auth::user();
        $services   = Auth::user()->services;

        return view('providers.profile')->with(comptact('user', 'services'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        return view('users.create')->with(compact('user'));
    }

    public function edit(Request $request)
    {
        $user = Auth::user();

        return view('users.edit')->with(compact('user'));
    }
    
    public function edit_provider(Request $request)
    {
        $user = Auth::user();

        return view('users.edit_provider')->with(compact('user'));
    }


    public function saveNormalUserEditing(Request $request)
    {
        //need validation here

        $user = Auth::user();

        User::where('id',$user->id)->update([
         
         'email'=>$request->email,
         'name'=>$request->name,
         'password'=>Hash::make($request->password),

        ]);


        return back();
    }

    
    public function createProviderProfile(Request $request)
    {
        //need validation here

        $user = Auth::user();


        $path = $request->file('profile_image')->store('avatars');

        User::where('id',$user->id)->update([
         
         'business_name'=>$request->business_name,
         'short_description'=>$request->short_description,
         'business_hours'=>$request->business_hours,
         'city'=>$request->city,
         'avatar'=>$path,

        ]);


        return back();
    }




    public function editProviderProfile(Request $request)
    {
        //need validation here

        $user = Auth::user();

        if ($request->has('profile_image')) {
           $path = $request->file('profile_image')->store('avatars');
        }else{
           $path = $user->avatar;
        }
        

        User::where('id',$user->id)->update([
         
         'email'=>$request->email,
         'name'=>$request->name,
         'password'=>Hash::make($request->password),
         'business_name'=>$request->business_name,
         'short_description'=>$request->short_description,
         'business_hours'=>$request->business_hours,
         'city'=>$request->city,
         'avatar'=>$path,

        ]);


        return back();
    }


}
