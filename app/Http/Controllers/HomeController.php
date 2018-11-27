<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->take(5)->get();
        $blogs = Blog::orderBy('id', 'desc')->take(3)->get();

        return view('index', [
            'projects'  => $projects,
            'blogs'     => $blogs
        ]);
    }

    public function about()
    {
        return view('nosotros');
    }

    public function services()
    {
        return view('servicios');
    }

}
