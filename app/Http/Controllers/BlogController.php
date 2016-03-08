<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin', ['except'=> [
            'index', 'show'
        ]]);
    }

    public function index(){
        $blogs = Blog::orderby('id', 'desc')->get();
        return view('blog.index')->with(['blogs' => $blogs]);
    }

    public function create(){
        return view('blog.create');
    }

    public function storeblog(Request $request){
        $this->validate($request, [
            'title' => 'required|max:500',
            'body' => 'required|max:2000',
        ]);
        if($request!=null):
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->body = $request->body;
            if($blog->save()):
                return view('blog.show')->with([
                    'blog'=>$blog, 'message' => 'Success']);
            endif;
        endif;
        return redirect()->route('blog.create');
    }

    public function show($id){
        $blog = Blog::find($id);
        if($blog!=null):
            return view('blog.show', ['blog' => $blog]);
        endif;
        return redirect()->route('blog.index')
            ->with(['message' => 'There is something wrong!!']);
    }

    public function edit($id){
        $blog = Blog::find($id);
        if($blog!=null){
            return view('blog.edit', ['blog' => $blog]);
        }
        return redirect()->route('blog.index')->with(['message' => 'There is something wrong!!']);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'title' => 'required|max:500',
            'body' => 'required|max:2000',
        ]);
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        if($blog->save()):
            return view('blog.show', ['blog' => $blog]);
        endif;
        return redirect()->route('blog.index')->with(['message' => 'There is something wrong!!']);
    }

    public function delete($id){
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('blog.index');

    }

}
