<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('website.header.contact');
    }
    public function news(){
        return view('website.news.news');
    }
    public function features(){
        return view('website.header.features');
    }
}
