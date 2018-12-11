<?php

namespace App\Http\Controllers;

use App\Brand;
use App\NewsletterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsletterEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('edit', 'destroy')]);
    }

    public function index()
    {
        $emails = NewsletterEmail::orderBy('id', 'desc')->paginate(50);
        return view('admin-panel-newsletter-emails', [
            'emails' => $emails,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $email = new NewsletterEmail([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);

        $email->save();

        return redirect('newsletter?event=suscribe-ok');
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
        $email = NewsletterEmail::find($id);
        $email->delete();
        return Redirect::back();
    }
}
