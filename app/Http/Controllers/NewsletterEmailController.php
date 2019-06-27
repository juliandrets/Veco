<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Exports\UsersExport;
use App\NewsletterEmail;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class NewsletterEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('edit', 'destroy')]);
    }

    public function index()
    {
        $emails = NewsletterEmail::orderBy('id', 'desc')->get();
        return view('admin-panel-newsletter-emails', [
            'emails' => $emails,
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        if(! NewsletterEmail::where('email', $request->input('email'))->first()) {
            $email = new NewsletterEmail([
                'name' => $request->input('name'),
                'email' => $request->input('email')
            ]);

            $email->save();
        }

        if ($request->input('email') == 'newsletter') {
            return redirect('newsletter?event=suscribe-ok');
        } else {
            return Redirect::back()->with('query_data', 'some_data');
        }
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

    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
