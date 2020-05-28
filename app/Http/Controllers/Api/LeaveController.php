<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Leave;
class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Leave::where('status','0')->get(),200);
    }

    public function leave_history()
    {
        return response()->json(Leave::get(),200);
    }

    public function approve($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->status = "1";
        if($leave->save()){
            return response()->json([
                'success' => true,
                'leave' => $leave
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
    public function decline($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->status = "2";
        if($leave->save()){
            return response()->json([
                'success' => true,
                'leave' => $leave
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'employee_id' => 'required',
            'reason' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'type' => 'required',
            'leave_location' => 'required',
            'leave_contact' => 'required'
        ]);
        strtotime($request->from_date);
        $today = strtotime(date('Y-m-d'));
        if((strtotime($request->from_date) < $today) || (strtotime($request->to_date) < $today) || (strtotime($request->to_date) < strtotime($request->from_date)) || (strtotime($request->from_date) == strtotime($request->to_date))
         ){
            return response()->json([
                'success' => false,
                'message' => "You Submit an invalid date"
            ],400);
        }



        $leave = new Leave();
        $leave->employee_id = $request->employee_id;
        $leave->reason = $request->reason;
        $leave->from_date = $request->from_date;
        $leave->to_date = $request->to_date;
        $leave->type = $request->type;
        $leave->leave_location = $request->leave_location;
        $leave->leave_contact = $request->leave_contact;
        $leave->status = '0';

        if($leave->save()){
            return response()->json([
                'success' => true,
                'leave' => $leave
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
        return response()->json(Leave::findOrFail($id),200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leave = Leave::findOrFail($id);
        if($leave->delete()){
            return response()->json([
                'success' => true,
                'leave' => $leave
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
