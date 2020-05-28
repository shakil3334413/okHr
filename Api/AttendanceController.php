<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Attendance;
use Validator;
class AttendanceController extends Controller
{
    public function inTimeAttendance(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'employee_id' => 'required',
            'deviceId' => 'required',
            'inDate' => 'required',
            'inTime' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

        $attendance = new Attendance();
        $attendance->employee_id = $req->employee_id;
        $attendance->deviceId = $req->deviceId;
        $attendance->inDate = $req->inDate;
        $attendance->inTime = $req->inTime;
        if($attendance->save()) {
            return response()->json([
                'success' => true,
                'message' => 'In Attendance Done!!'
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!!'
            ],400);
        }

    }

    public function outTimeAttendance(Request $req, $id)
    {
        $validator = Validator::make($req->all(),[
            'employee_id' => 'required',
            'deviceId' => 'required',
            'outDate' => 'required',
            'outTime' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

        $attendance = Attendance::findOrFail($id);

        if($attendance){
            if($attendance->employee_id == $req->employee_id &&
            $attendance->deviceId == $req->deviceId && $attendance->inDate == $req->outDate){
                $attendance->outDate = $req->outDate;
                $attendance->outTime = $req->outTime;
                if($attendance->save()){
                    return response()->json([
                        'success' => true,
                        'message' => 'Your day Done!!'
                    ],200);
                }
                
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'somethin went wrong!!'
                ],400);
            }
        }else{
            return response()->json([
                'success' => false,
                'message' => 'somethin went wrong!!'
            ],400);
        }
    }
}