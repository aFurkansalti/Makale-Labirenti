<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;

class AdminController extends Controller
{
    public function dashboard() {
        return view('admin.dashboard');
    }

    public function login(Request $request) {
        if($request -> isMethod('post')) {
            $data = $request -> all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30'
            ];

            $customMessages = [
                'email.required' => "Email boş geçilemez",
                'email.email' => 'Lütfen geçerli bir email giriniz',
                'password.required' => 'Şifre boş geçilemez'
            ];

            $this -> validate($request, $rules, $customMessages);

            if(Auth::guard('admin') -> attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect("admin/dashboard");
            } else {
                return redirect() -> back() -> with("error_message", "Invalid Email or Password!");
            }
        }
        return view('admin.login');
    }

    public function logout() {
        Auth::guard('admin') -> logout();
        return redirect('admin/login');
    }
}
