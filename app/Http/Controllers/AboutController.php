<?php

namespace App\Http\Controllers;

use app\Models\Post;
//use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about');
    }
}
