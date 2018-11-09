<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Picture;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PictureController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('create', 'edit', 'destroy')]);
    }

    public function index()
    {

    }

    public function create()
    {

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
        $picture = Picture::find($id);
        $picture->delete();
        return Redirect::back();
    }
}
