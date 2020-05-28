<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use App\Supervisor;
use Illuminate\Support\Facades\File;
class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Supervisor::get(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json(Department::get(),200);
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
        if($supervisor->save()){
            return response()->json([
                'success' => true,
                'leave' => $supervisor
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
        $supervisor=Supervisor::findOrfail($id);
        if($supervisor){
            return response()->json([
                'success' =>true,
                'department'=>$supervisor
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
        $supervisor = Supervisor::findOrFail($id);


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
        if($supervisor->save()){
            return response()->json([
                'success' =>true,
                'department'=>$supervisor
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
        $supervisor=Supervisor::findOrfail($id);
        if($supervisor->delete()){
            return response()->json([
                'success' =>true,
                'department'=>$supervisor
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
