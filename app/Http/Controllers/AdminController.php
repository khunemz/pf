<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function signin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ])){
            //if Auth success
            return redirect()->route('admin.dashboard')
                ->with('flash', 'Login successfully');
        }
        return redirect()->back()->with('flash', 'Login fail');

    }
}
