<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Brand;
use App\NewsletterEmail;
use App\Product;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsletterController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('edit', 'destroy')]);
    }

    public function index()
    {

    }

    public function create()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);
        $products = Product::orderBy('id', 'desc')->paginate(10);
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);

        return view('admin-panel-newsletter-create', [
            'projects' => $projects,
            'products' => $products,
            'blogs' => $blogs,
        ]);
    }

    public function store(Request $request)
    {

    }

    public function show(Brand $brand)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
