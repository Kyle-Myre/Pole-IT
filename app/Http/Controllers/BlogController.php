<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Takes Blog and Activities and returns them in random order in a page
     */
    final public function index()
    {
        $blogs = Blog::inRandomOrder()->orderByDesc('updated_at')->limit(3)->get();
        $activities = Activity::inRandomOrder()->orderByDesc('updated_at')->limit(3)->get();

        return view('home.blog', ['blogs' => $blogs, 'activities' => $activities]);
    }
}
