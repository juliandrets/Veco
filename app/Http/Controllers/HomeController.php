<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(5)->get();
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();

        return view('index', [
            'projects'  => $projects,
            'blogs'     => $blogs
        ]);
    }

}
