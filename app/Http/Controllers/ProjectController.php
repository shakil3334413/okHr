<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Supervisor;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supervisors = Supervisor::all();
        return view('project.create',compact('supervisors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | min:3',
            'supervisor_id' => 'required',
            'assignee' => 'required',
            'description' => 'required'
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->supervisor_id = $request->supervisor_id;
        $project->assignee = $request->assignee;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('project.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('project.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $supervisors = Supervisor::all();
        return view('project.edit',compact('project','supervisors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        $request->validate([
            'name' => 'required | min:3',
            'assignee' => 'required',
            'description' => 'required'
        ]);

        if($request->supervisor_id){
            $supervisor = $request->supervisor_id;
        }else{
            $supervisor = $supervisor->supervisor_id;
        }

        $project->name = $request->name;
        $project->supervisor_id = $supervisor;
        $project->assignee = $request->assignee;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect()->route('project.index');
    }
}
