<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminPage(Request $request){
        return view('adminPage');
       }

       public function login(Request $request){
        return view('login');
       }

       public function logout()
       {
           Auth::logout();
           return redirect('/login');
       }
}
