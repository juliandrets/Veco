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
        $blog = new Blog([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text')
        ]);

        $blog->save();

        $pictures = $request->file('pictures');

        foreach ((array) $pictures as $picture) {
            $image = $picture;
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blog/');

            list($width, $height) = getimagesize($image);
            $tumbImage = Image::make($image->getRealPath());
            $tumbImage->resize($width / 2, $height / 2);

            $image->move($destinationPath, $name);
            $tumbImage->save(public_path('/uploads/blog/tumb/' . $name));

            $blog = Blog::orderBy('created_at', 'desc')->first();

            $blogPicture = new Picture([
                'picture' => $name,
                'blog_id' => $blog->id,
            ]);

            $blogPicture->save();
        }


        return redirect('adm/blog?event=create');
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

    public function edit(Project $blogs)
    {
        $this->middleware('role:admin');

        return view('admin-panel-edit-blog', [
            'blogs' => $blogs
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('pictures')) {
            $pictures = $request->file('pictures');
            foreach ((array) $pictures as $picture) {
                $image = $picture;
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/blog/');

                list($width, $height) = getimagesize($image);
                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save(public_path('/uploads/blog/tumb/' . $name));

                $blog = Blog::orderBy('created_at', 'desc')->first();

                $blogPicture = new Picture([
                    'picture' => $name,
                    'blog_id' => $blog->id,
                ]);

                $blogPicture->save();
            }
        }

        Blog::find($id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text')
        ]);
        
        return redirect('adm/blog?event=update');
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('adm/blog?event=delete');
    }
}
