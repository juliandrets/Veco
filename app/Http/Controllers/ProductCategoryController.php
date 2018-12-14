<?php

namespace App\Http\Controllers;

use App\Picture;
use App\ProductCategory;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class ProductCategoryController extends Controller
{
    protected $model = ProductCategory::class;
    protected $route = '/adm/products-categories';

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
        // Create model
        $model = new $this->model([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        $model->save();

        // Get model
        $model = $this->model::orderBy('id', 'desc')->first();

        // Save pictures
        if(!$this->createPictures($request, $model, 'product_category_id', 'productsCategories')) {
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
        $picture = $model->picture->id;

        // Save pictures
        if (!$this->updatePicture($request, $id, 'product_category_id', 'productsCategories', $picture) && !$model->picture) {
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        // Update model
        $model->update([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return redirect($this->route.'?event=update');
    }

    public function edit($id)
    {
        $this->middleware('role:admin');

        $productCategory = ProductCategory::find($id);

        return view('admin-panel-edit-product-category', [
            'productCategory' => $productCategory
        ]);
    }


    public function destroy($id)
    {
        $model = $this->model::find($id);
        $model->delete();
        return redirect($this->route.'?event=delete');
    }
}
