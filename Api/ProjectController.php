<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return response()->json(Project::get(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(Supervisor::get(),200);
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
        if($project->save()){
            return response()->json([
                'success' => true,
                'leave' => $project
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project=Project::findOrfail($id);
        if($project){
            return response()->json([
                'success' =>true,
                'department'=>$project
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if($project->save()){
            return response()->json([
                'success' =>true,
                'department'=>$project
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::findOrfail($id);
        if($project->delete()){
            return response()->json([
                'success' =>true,
                'department'=>$project
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
