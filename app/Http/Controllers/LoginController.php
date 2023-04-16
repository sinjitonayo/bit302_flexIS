<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function postLogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email', 'password'))){
            if ($request->input('email') === 'hradmin@helpstikom.com') {
                return view('users.admin.dashboard');
            }
            else if($request->input('email') === 'supervisor@helpstikom.com'){
                return "Hi Supervisor";
            }
            return "Hi";
        }

        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }


}
