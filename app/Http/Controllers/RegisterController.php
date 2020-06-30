<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function guest(){
      return view('guest');
    }

    public function formRegister(){
      return view('pages/form');
    }

    public function welcome(Request $req){
      $firstName = $req->input('firstName');
      $lastName = $req->input('lastName');
      $gender = $req->input('gender');
      $nationality = $req->input('nationality');
      $language = $req->input('language');
      $bio = $req->input('bio');

      return view('pages/welcome', [
        "name" => $firstName . " " . $lastName,
        "gender" => $gender,
        "nationality" => $nationality,
        "language" => $language,
        "bio" => $bio
      ]);;
    }
}
