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
        $blogs = Blog::orderby('id', 'desc')->get();
        return view('admin.dashboard')->with(['blogs' => $blogs]);
    }

    public function create(){
        return view('blog.create');
    }

    public function storeblog(Request $request){
        $this->validate($request, [
            'title' => 'required|max:500',
            'body' => 'required|max:2000',
            'tag' => 'required|max:50'
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->tag = $request->tag;
        if($blog->save()):
            return redirect()->route('blog.show')->with([
                'blog'=>$blog->id,
                'message' => 'Blog posted!!']);
        endif;
    }

}
