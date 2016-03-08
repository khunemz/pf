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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if(Auth::login($user)):
            return redirect()->route('page.index')
                ->with(['message' => 'สมัครสมาชิกเรียบร้อย']);
        endif;
        return redirect()->route('page.getauth')->with(['message' => 'ไม่สามารถสมัครสมาชิกได้ กรุณาลองใหม่อีกครั้ง']);
    }

    public function signin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            return redirect()->route('page.index')->with(['message' => 'ยินดีต้อนรับครับ']);
        }

        return redirect()->route('page.getauth')->with(['message' => 'Invalid Email or Password, please try again.' ]);
    }

    public function signout(){

        Auth::logout();
        return redirect()->route('page.getauth')->with(['message'=> 'ออกจากระบบแล้ว']);
    }
}
