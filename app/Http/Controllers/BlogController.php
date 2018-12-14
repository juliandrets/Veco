<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Picture;
use App\Product;
use App\Category;
use App\Brand;
use App\Project;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\ImageManagerStatic as Image;


class BlogController extends Controller
{
    protected $model = Blog::class;
    protected $route = '/adm/blog';

    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('create', 'edit', 'destroy')]);
    }

    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);

        return view('admin-panel-blog', ['blogs' => $blogs]);
    }

    public function create()
    {
        $this->middleware('role:admin');

        return view('admin-panel-create-blog');
    }

    public function store(Request $request)
    {
        $model = new $this->model([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text')
        ]);

        $model->save();

        // Get model
        $model = $this->model::orderBy('id', 'desc')->first();

        // Save pictures
        if(!$this->createPictures($request, $model, 'blog_id', 'blog')) {
            // Delete fail model without image
            $model->delete();
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        return redirect($this->route.'?event=create');
    }

    public function update(Request $request, $id)
    {
        // Get model & picture
        $model = $this->model::find($id);

        // Save pictures
        if(!$this->updatePictures($request, $id, 'blog_id', 'blog') && count($model->pictures) == 0) {
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        $model->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text')
        ]);

        return redirect($this->route.'?event=update');
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('noticia', ['blog' => $blog]);
    }

    public function showBlogs()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(10);
        return view('noticias', [
           'blogs' => $blogs
        ]);
    }

    public function edit($id)
    {
        $this->middleware('role:admin');

        $model = $this->model::find($id);

        return view('admin-panel-edit-blog', [
            'blog' => $model
        ]);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('adm/blog?event=delete');
    }
}
