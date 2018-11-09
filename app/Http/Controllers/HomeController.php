<?php

namespace App\Http\Controllers;

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
        return view('index', [
            'projects' => $projects
        ]);
    }
    public function noticia()
    {
        return view('noticia');
    }
    public function proyectos()
    {
        return view('proyectos');
    }
    public function proyecto()
    {
        return view('proyecto');
    }
    public function noticias()
    {
        return view('noticias');
    }

}
