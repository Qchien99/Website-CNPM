<?php

namespace App\Http\Controllers\Site;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    // public function index(){
    //     return view('Frontend.index');
    // }
    public function login(){
        // dd(bcrypt('23456'));
        return view('Frontend.login');
    }
    public function postLogin(LoginRequest $request){
        $email =  $request->email;
        $password = $request->password;

        $customer = Customer::where('email','=',$email)->where('password','=',md5($password))->count();
        if($customer>0){
            $request->session()->put('logined', 'true');
            return redirect()->route('giohang');
        }else{
            return redirect()->back()->with('error','Sai email hoặc mật khẩu')->withInput();

        }
    }

    public function signup(){
        // dd(bcrypt('23456'));
        return view('Frontend.signup');
    }
    public function postSignup(LoginRequest $request){
        $email =  $request->email;
        $password = $request->password;

        $customer = Customer::where('email','=',$email)->where('password','=',md5($password))->count();
        if($customer>0){
            $request->session()->put('logined', 'true');
            return redirect()->route('giohang');
        }else{
            return redirect()->back()->with('error','Sai email hoặc mật khẩu')->withInput();

        }
    }

    public function dangxuat(Request $request){
        $request->session()->forget('logined');
        return view('index');
    }
}
