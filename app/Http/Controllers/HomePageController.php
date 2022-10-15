<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view("layouts.blog.pages.index");
    }
    public function post_details()
    {
        return view('layouts.blog.pages.post');
    }
}
