<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects=Project::all();

       
        
        return view('index',compact('projects'));
    }

    public function create()
    {
        return view('create');
    }


    public function store()
    {
        // return request()->all();//Returns all the data of the request


        $project=new Project();
        $project->title=request('title');
        $project->description=request('description');


        $project->save();

        return redirect('/projects');

    }

    public function show()
    {
        return view('create');
    }
    public function edit()
    {
        return view('create');
    }
    public function update()
    {
        return view('create');
    }
    public function destroy()
    {
        return view('create');
    }

}
