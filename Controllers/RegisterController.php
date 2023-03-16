<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view("register"); 
    }
    public function register_proses(Request $request){
        $validasi = $request->validate([
          'name' => 'required|max:128',
          'email' => 'required|unique:users|email',
          'password' => 'required|min:6|confirmed'
        ]); 
        $validasi['password'] = Hash::make($validasi['password']);
              
          User::create($validasi);
      
          return redirect('/');
      }
}

