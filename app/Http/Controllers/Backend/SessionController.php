<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login(){
        return view('backend.pages.login');
    }
    
    public function doLogin(Request $request){
        // dd(request()->all());
        $credentials=$request->except("_token");
        //dd($credentials);
        $check=Auth::attempt($credentials);

        if($check)
        {
            
            notify()->success("login successful");
            return redirect()->route('home');
            
        }else{
            //2 number user
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        notify()->success("logout successful");
        return redirect()->route('login');
    }
}
