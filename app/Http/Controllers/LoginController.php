<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public $valid_msg;

    function LoginController(valid_msg $valid_msg)
    {
        $this->valid_msg = $valid_msg;
    }
    public function Login()
    {
        return view("admin.login");
        // $this->valid_msg="not Fond";
    }
    public function login_action(Request $request)
    {

        $remember_me  = (!empty($request->remember_me)) ? TRUE : FALSE;
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->input('username'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($data, $remember_me)) {
            if (auth()->user()->role == '0') {
                return redirect('admin')->withsucces('Welcome To dashbard');
            } else {
                return redirect('user')->withsucces('Welcome To dashbard');
            }
        } else {
            echo "Not match User Name and Password";
        }
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
