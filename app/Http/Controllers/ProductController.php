<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $model = Product::class;
    protected $route = '/adm/products';
    
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
        // Create model
        $model = new Product([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description')
        ]);
        $model->save();

        // Get model
        $model = $this->model::orderBy('id', 'desc')->first();

        // Save pictures
        if (!$this->createPictures($request, $model, 'product_id', 'products')) {
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
        if (!$this->updatePicture($request, $id, 'product_id', 'products', $picture) && !$model->picture) {
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        // Update model
        $model->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'description' => $request->input('description')
        ]);
        
        return redirect($this->route.'?event=update');
    }

    public function edit(Product $product)
    {
        $this->middleware('role:admin');

        $categories = ProductCategory::orderBy('name', 'asc')->get();

        return view('admin-panel-edit-product', [
            'product'    => $product,
            'categories' => $categories,
        ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('adm/products?event=delete');
    }
}
