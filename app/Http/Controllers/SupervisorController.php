<?php

namespace App\Http\Controllers;
use App\Department;
use App\Supervisor;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = Supervisor::all();
        return view('supervisor.index',compact('supervisors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view('supervisor.create',compact('department'));
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
            "name" => "required | min:3",
            "email" => "required | unique:supervisors,email",
            "phone" => "required | min:11",
            "image" => "required|mimes:jpeg,jpg,png",
            "officeEmail" => "required | unique:supervisors,officeEmail",
            "department" => "required"
        ]);

        if($request->image){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img/supervisor'), $imageName);
        }else{
            $imageName = "";
        }

        $supervisor = new Supervisor();
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->phone = $request->phone;
        $supervisor->officeEmail = $request->officeEmail;
        $supervisor->image = $imageName;
        $supervisor->department = $request->department;
        $supervisor->save();

        return redirect()->route('supervisor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        return view('supervisor.show',compact('supervisor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        return view('supervisor.edit',compact('supervisor'));
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
        $supervisor = Supervisor::findOrFail($id);
        $request->validate([
            "name" => "required | min:3",
            "email" => "required | unique:supervisors,email,".$id,
            "phone" => "required | min:11",
            "image" => "mimes:jpeg,jpg,png",
            "officeEmail" => "required | unique:supervisors,officeEmail,".$id,
        ]);

        if($request->image){
            $image_path = "img/supervisor/".$supervisor->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img/supervisor'), $imageName);
        }else{
            $imageName = $supervisor->image;
        }

        if($request->department){
            $department = $request->department;
        }else{
            $department = $supervisor->department;
        }

        
        $supervisor->name = $request->name;
        $supervisor->email = $request->email;
        $supervisor->phone = $request->phone;
        $supervisor->officeEmail = $request->officeEmail;
        $supervisor->image = $imageName;
        $supervisor->department = $department;
        $supervisor->save();

        return redirect()->route('supervisor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supervisor = Supervisor::findOrFail($id);
        $supervisor->delete();
        return redirect()->route('supervisor.index');
    }
}
