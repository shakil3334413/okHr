<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Department::get(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name' => 'required'
        ]);

        $department = new Department();
        $department->name = $request->name;
        if($department->save()){
            return response()->json([
                'success' => true,
                'leave' => $department
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
        $department=Department::findOrfail($id);
        if($department){
            return response()->json([
                'success' =>true,
                'department'=>$department
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
        $department=Department::findOrfail($id);
        if($department){
            return response()->json([
                'success' =>true,
                'department'=>$department
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
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
        $request->validate([
            'name' => 'required'
        ]);

        $department =Department::findOrfail($id);
        $department->name = $request->name;
        if($department->save()){
            return response()->json([
                'success' => true,
                'leave' => $department
            ],201);
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
        $department=Department::findOrfail($id);
        if($department->delete()){
            return response()->json([
                'success' =>true,
                'department'=>$department
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
