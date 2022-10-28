<?php

namespace App\Http\Controllers;

use app\Models\Post;
//use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main');
    }
}
