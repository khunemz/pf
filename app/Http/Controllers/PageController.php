<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function getauth(){
        return view('admin.dashboard');
    }

}
