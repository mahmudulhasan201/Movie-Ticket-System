<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebSessionController extends Controller
{
    public function registration()
    {
        return view('frontend.pages.registration');
    }

    public function doRegistration(Request $request)
    {
        //Validation
        $checkValidation = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'mobile' => 'required',
            'address' => 'required'
        ]);
        if ($checkValidation->fails()) {
            notify()->error($checkValidation->getMessageBag());
            return redirect()->back();
        }

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->mobile,
            'address' => $request->address
        ]);
        notify()->success("Registration Successful");
        return redirect()->route('frontend.home');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function doLogin(Request $request)
    {

        $customerInput = ['email' => $request->email, 'password' => $request->password];
        $checkLogin = auth()->guard('customerGuard')->attempt($customerInput);

        //Validation
        $checkValidation = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($checkValidation->fails()) {
            notify()->error("Invalid Credentials.");
            return redirect()->back();
        }

        if ($checkLogin) {
            notify()->success("Login Successful.");
            return redirect()->route('frontend.home');
        }

        notify()->error("Invalid Credentials.");
        return redirect()->back();
    }

    public function logout(){
        auth('customerGuard')->logout();
        notify()->success("Logout Successful.");
        return redirect()->route('frontend.home');
    }
}
