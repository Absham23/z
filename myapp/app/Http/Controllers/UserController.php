<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function abc(){
        return "abc";
    }
    public function data(){
        $name = "Absham";
        return view("text", compact('name'));
    }
}
