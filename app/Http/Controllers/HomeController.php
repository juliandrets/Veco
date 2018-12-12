<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Product;
use App\ProductCategory;
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
        $productCategories = ProductCategory::orderBy('id', 'desc')->get();

        return view('index', [
            'projects'  => $projects,
            'productCategories'  => $productCategories,
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

    public function newsletter()
    {
        return view('newsletter');
    }

    public function products()
    {
        $categories = ProductCategory::orderBy('id', 'desc')->get();

        return view('productos', [
            'categories' => $categories
        ]);
    }

    public function showProducts($name)
    {
        $category = ProductCategory::where('name', $name)->first();
        $products = Product::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(12);

        return view('producto', [
            'category' => $category,
            'products' => $products,
        ]);
    }

}
