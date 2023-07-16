<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function create(){

        return view('create_login');
    }
    public function save(Request $request){

   
        $validated=$request->validate([
            'name' =>'required',
            'email'=>'required|email:rfc,dns',
            'age' =>'required|numeric|integer',
            'password'=>'required'

        ]);
       $create=User::create($request->all());
       $msg='usuario salvo entre em sua conta para utilizar o serviço';
      return  view('login',compact('msg'));
        
    }

    public function get(){
       
        return view('login');
    }
    public function getusuario(Request $request){
   
        $validate=$request->validate([
            'email'=>'required|email:rfc,dns',
            'password'=>'required'
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        $msg='usuario ou senha invalida';
        return view('login',compact('msg'));
    }

   
}
