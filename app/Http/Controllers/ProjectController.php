<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Product;
use App\Category;
use App\Brand;
use App\Project;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\ImageManagerStatic as Image;


class ProjectController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('role:admin', ['only' => array('create', 'edit', 'destroy')]);
    }

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);

        return view('admin-panel-projects', ['projects' => $projects]);
    }

    public function create()
    {
        $this->middleware('role:admin');

        return view('admin-panel-create-projects');
    }

    public function store(Request $request)
    {
        $project = new Project([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text'),
            'maps' => $request->input('maps'),
            'place' => $request->input('place'),
            'client' => $request->input('client'),
            'arquitectes' => $request->input('arquitectes'),
            'date' => $request->input('date'),
            'production' => $request->input('production')
        ]);

        $project->save();

        $pictures = $request->file('pictures');

        foreach ((array) $pictures as $picture) {
            $image = $picture;
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/projects/');

            list($width, $height) = getimagesize($image);
            $tumbImage = Image::make($image->getRealPath());
            $tumbImage->resize($width / 2, $height / 2);

            $image->move($destinationPath, $name);
            $tumbImage->save(public_path('/uploads/projects/tumb/' . $name));

            $project = Project::orderBy('created_at', 'desc')->first();

            $projectPicture = new Picture([
                'picture'    => $name,
                'project_id' => $project->id,
            ]);

            $projectPicture->save();
        }


        return redirect('adm/projects?event=create');
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('proyecto', ['project' => $project]);
    }

    public function showProjects()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(10);
        return view('proyectos', [
           'projects' => $projects
        ]);
    }

    public function edit(Project $project)
    {
        $this->middleware('role:admin');

        return view('admin-panel-edit-projects', [
            'project' => $project
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('pictures')) {
            $pictures = $request->file('pictures');
            foreach ((array)$pictures as $picture) {
                $image = $picture;
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/projects/');

                list($width, $height) = getimagesize($image);
                $tumbImage = Image::make($image->getRealPath());
                $tumbImage->resize($width / 2, $height / 2);

                $image->move($destinationPath, $name);
                $tumbImage->save(public_path('/uploads/projects/tumb/' . $name));


                $projectPicture = new Picture([
                    'picture' => $name,
                    'project_id' => $id,
                ]);

                $projectPicture->save();
            }
        }

        Project::find($id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text'),
            'maps' => $request->input('maps'),
            'place' => $request->input('place'),
            'client' => $request->input('client'),
            'arquitectes' => $request->input('arquitectes'),
            'date' => $request->input('date'),
            'production' => $request->input('production')
        ]);
        
        return redirect('adm/projects?event=update');
    }

    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('adm/projects?event=delete');
    }

    // Admin Filters
    public function nameFilter()
    {
        $name = Input::get('name');
        $data = Product::where('name', 'like', '%'.$name.'%')->paginate(10);

        return view('admin-panel-projects',
            ['projects' => $data]
        );
    }
}
