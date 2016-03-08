<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index(){
        $blog = Blog::orderby('created_at')->get();
        return view('admin.dashboard')->with(['blog' => $blog]);
    }

}
