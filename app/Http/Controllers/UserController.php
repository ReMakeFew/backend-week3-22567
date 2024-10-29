<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function userHome() {
        return view('home');
    }
    function aboutHome() {
       // return view('about');
       if (view()->exists('admin.sige'))
       {
         return view('admin.login');
       }else{

         return "View not found";
       }
    }

    function adminLogin() {
        return view('admin.login');
    }

}
