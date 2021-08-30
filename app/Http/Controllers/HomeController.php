<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        return View('home');
    }

    function product(){
        return View('production');
    }
}
