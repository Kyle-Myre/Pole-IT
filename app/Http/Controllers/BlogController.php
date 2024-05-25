<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    final public function index() {

        $blogs = Blog::latest()->inRandomOrder()->limit(3)->get();

        $activities = Activity::latest()->inRandomOrder()->limit(3)->get();

        return view("home.blog" , ["blogs" => $blogs , "activities" => $activities]);
    }
}
