<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulthumController extends Controller
{
    public function index(){
        $name = 'KULTHUM';
        $age = 27;
        $job = 'software developer';
        $favoriteHobbies = 'play chess';
        return view('welcome' , compact('name' , 'age' ,'job','favoriteHobbies'));
    }
}

