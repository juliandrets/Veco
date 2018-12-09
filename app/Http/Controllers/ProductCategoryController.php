<?php

namespace App\Http\Controllers;

use App\Picture;
use App\ProductCategory;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ProductCategoryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('create', 'edit', 'destroy')]);
    }

    public function index()
    {
        $productsCategories = ProductCategory::orderBy('id', 'desc')->paginate(10);

        return view('admin-panel-products-categories', ['productsCategories' => $productsCategories]);
    }

    public function create()
    {
        $this->middleware('role:admin');

        return view('admin-panel-create-product-category');
    }

    public function store(Request $request)
    {
        $project = new ProductCategory([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        $project->save();

        $project = ProductCategory::orderBy('id', 'desc')->first();

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
                'product_category_id' => $project->id,
            ]);

            $projectPicture->save();
        }


        return redirect('adm/products-categories?event=create');
    }

    public function edit(ProductCategory $productCategory)
    {
        $this->middleware('role:admin');

        return view('admin-panel-edit-product-category', [
            'productCategory' => $productCategory
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

        ProductCategory::find($id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        
        return redirect('adm/products-catgories?event=update');
    }

    public function destroy($id)
    {
        $productCategory = ProductCategory::find($id);
        $productCategory->delete();
        return redirect('adm/products-categories?event=delete');
    }
}
