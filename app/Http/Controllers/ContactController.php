<?php

namespace App\Http\Controllers;

use app\Models\Post;
//use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }
}