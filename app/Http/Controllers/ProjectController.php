<?php

namespace App\Http\Controllers;

use App\Product;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $model = Project::class;
    protected $route = '/adm/projects';
    
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
        // Create project
        $model = new $this->model([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text'),
            'maps' => $request->input('maps'),
            'place' => $request->input('place'),
            'client' => $request->input('client'),
            'arquitectes' => $request->input('arquitectes'),
            'date' => $request->input('date'),
            'production' => $request->input('production'),
            'adress' => $request->input('adress'),
        ]);
        $model->save();

        // Get model
        $model = $this->model::orderBy('id', 'desc')->first();

        // Save pictures
        if(!$this->createPictures($request, $model, 'project_id', 'projects')) {
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

        // Save pictures
        if(!$this->updatePictures($request, $id, 'project_id', 'projects') && count($model->pictures) == 0) {
            return redirect()->back()->withErrors(['msg', 'La imagen principal es obligatoria']);
        }

        // Update model
        $model->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'text' => $request->input('text'),
            'maps' => $request->input('maps'),
            'place' => $request->input('place'),
            'client' => $request->input('client'),
            'arquitectes' => $request->input('arquitectes'),
            'date' => $request->input('date'),
            'production' => $request->input('production'),
            'adress' => $request->input('adress'),
        ]);

        return redirect($this->route.'?event=update');
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
