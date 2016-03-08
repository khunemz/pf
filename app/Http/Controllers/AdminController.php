<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class AdminController extends Controller
{

    public function signup(Request $request){
        $this->validate($request, [
            'email' => 'required:unique',
            'password' => 'required:min:6'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        Auth::login($user);

        return redirect()->route('page.index');
    }

    public function signin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->route('page.index');
        }

        return redirect()->route('page.getauth');
    }

    public function signout(){
        Auth::logout();
        return redirect()->route('page.index');
    }
}
