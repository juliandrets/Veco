<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('create', 'edit', 'destroy')]);
    }

    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);

        return view('admin-panel-products', ['products' => $products]);
    }

    public function create()
    {
        $this->middleware('role:admin');

        $categories = ProductCategory::orderBy('name', 'asc')->get();

        return view('admin-panel-create-product', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $project = new Product([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description')
        ]);

        $project->save();

        $project = Product::orderBy('id', 'desc')->first();

        $pictures = $request->file('pictures');
        $count = 0;

        foreach ($pictures as $image) {
            $count++;
            $name = time() . $count .  '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/products/');

            list($width, $height) = getimagesize($image);

            $tumbImage = Image::make($image->getRealPath());
            $tumbImage->resize($width / 2, $height / 2);

            $image->move($destinationPath, $name);
            $tumbImage->save(public_path('/uploads/products/tumb/' . $name));

            $projectPicture = new Picture([
                'picture' => $name,
                'product_category_id' => $project->id,
            ]);

            $projectPicture->save();
        }


        return redirect('adm/products?event=create');
    }

    public function edit(Product $product)
    {
        $this->middleware('role:admin');

        return view('admin-panel-edit-product', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('pictures')) {
            $pictures = $request->file('pictures');
            $count = 0;

            foreach ($pictures as $image) {
                $count++;
                $name = time() . $count .  '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/productsCategories/');

                list($width, $height) = getimagesize($image);

                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save(public_path('/uploads/productsCategories/tumb/' . $name));

                $projectPicture = new Picture([
                    'picture' => $name,
                    'product_category_id' => $id,
                ]);

                $projectPicture->save();
            }
        }

        Product::find($id)->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description')
        ]);
        
        return redirect('adm/products?event=update');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('adm/products?event=delete');
    }
}
