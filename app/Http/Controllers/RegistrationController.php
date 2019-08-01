<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
   public function create()
   {
     return view('sessions.create');
   }
   public function store(){

     //validate
     $this->validate(request(), [
       'name' => 'required',
       'email' => 'required|email',
       'password' => 'required|6',

     ]);

     //create
     $user = User::create(request(['name','email','password']));

     //sign in

     auth()->login($user);

     //redirect
     return redirect()->home();

   }
}
