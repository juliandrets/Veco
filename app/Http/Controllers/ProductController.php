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

    public function show($id)
    {
        $product = Product::find($id);
        return view('producto-item', ['product' => $product]);
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
        if ($file = $request->file('file')) {
            $name = time() . md5(rand(0,999)) . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'uploads/products/files/';
            $file->move($destinationPath, $name);

            $model = new Product([
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'fixed' => $request->input('fixed'),
                'file' => $name
            ]);
        } else {
            $model = new Product([
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'fixed' => $request->input('fixed'),
            ]);
        }

        $model->save();

        // Get model
        $model = $this->model::orderBy('id', 'desc')->first();

        // Save pictures
        if (!$this->createPictures($request, $model, 'product_id', 'products')) {
            // Delete fail model without image
            $model->delete();
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        $preview = '';
        $preview2 = '';

        // Save preview 1
        if ($image = $request->file('preview')) {
            $preview = time() . md5(rand(0,9999)) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/products/preview/';

            try {
                list($width, $height) = getimagesize($image);
            } catch (\Exception $ex) {
                return false;
            }

            $image->move($destinationPath, $preview);
        }

        // Save preview 2
        if ($image = $request->file('preview2')) {
            $preview2 = time() . md5(rand(2,9999)) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/products/preview/';

            try {
                list($width, $height) = getimagesize($image);
            } catch (\Exception $ex) {
                return false;
            }

            $image->move($destinationPath, $preview2);
        }

        $model->update([
            'preview' => $preview,
            'preview2' => $preview2,
        ]);


        return redirect($this->route.'?event=create');
    }

    public function update(Request $request, $id)
    {
        // Get model & picture
        $model = $this->model::find($id);

        // Save preview 1
        if ($image = $request->file('preview')) {
            $preview = time() . md5(rand(0,9999)) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/products/preview/';

            try {
                list($width, $height) = getimagesize($image);
            } catch (\Exception $ex) {
                return false;
            }

            $image->move($destinationPath, $preview);
        } else {
            $preview = Product::find($id)->preview;
        }

        // Save preview 2
        if ($image = $request->file('preview2')) {
            $preview2 = time() . md5(rand(2,9999)) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'uploads/products/preview/';

            try {
                list($width, $height) = getimagesize($image);
            } catch (\Exception $ex) {
                return false;
            }

            $image->move($destinationPath, $preview2);
        } else {
            $preview2 = Product::find($id)->preview2;
        }

        // Save pictures
        if(!$this->updatePictures($request, $id, 'product_id', 'products') && count($model->pictures) == 0) {
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        // Save file
        if ($file = $request->file('file')) {
            $name = time() . md5(rand(0,999)) . '.' . $file->getClientOriginalExtension();
            $destinationPath = 'uploads/products/files/';
            $file->move($destinationPath, $name);

            $model->update([
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'fixed' => $request->input('fixed'),
                'file' => $name,
                'preview' => $preview,
                'preview2' => $preview2,
            ]);
        } else {
            $model->update([
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'description' => $request->input('description'),
                'fixed' => $request->input('fixed'),
                'preview' => $preview,
                'preview2' => $preview2,
            ]);
        }

        return redirect('adm/products?event=update');
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
