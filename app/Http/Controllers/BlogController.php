<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    final public function index() {

        $blogs = Blog::inRandomOrder()->orderByDesc('updated_at')->limit(3)->get();
        $activities = Activity::inRandomOrder()->orderByDesc('updated_at')->limit(3)->get();
        
        return view("home.blog" , ["blogs" => $blogs , "activities" => $activities]);
    }
}
