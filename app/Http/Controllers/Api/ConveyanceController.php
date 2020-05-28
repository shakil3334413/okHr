<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Conveyance;
class ConveyanceController extends Controller
{

    public function index()
    {
        return response()->json(Conveyance::where('status','0')->get(),200);
    }

    public function conveyance_history()
    {

        return response()->json(Conveyance::get(),200);
    }

    public function approve($id)
    {
        $conveyance = Conveyance::findOrFail($id);
        $conveyance->status = "1";
        if($conveyance->save()) {
            return response()->json([
                'success' => true,
                'conveyance' => $conveyance
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!!'
            ],400);
        }
    }

    public function decline($id)
    {
        $conveyance = Conveyance::findOrFail($id);
        $conveyance->status = "2";
        if($conveyance->save()) {
            return response()->json([
                'success' => true,
                'conveyance' => $conveyance
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!!'
            ],400);
        }
    }
    public function store(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'employee_id' => 'required',
            'subject' => 'required|min:30|max:250',
            'amount' => 'required',
            'billDate' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

        $conveyance = new Conveyance();
        $conveyance->employee_id = $req->employee_id;
        $conveyance->subject = $req->subject;
        $conveyance->from = $req->from;
        $conveyance->to = $req->to;
        $conveyance->transport = $req->transport;
        $conveyance->amount = $req->amount;
        $conveyance->fromLat = $req->fromLat;
        $conveyance->fromLong = $req->fromLong;
        $conveyance->toLong = $req->toLong;
        $conveyance->distance = $req->distance;
        $conveyance->billDate = $req->billDate;
        $conveyance->status = 0;

        if($conveyance->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Bill Done!!'
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!!'
            ],400);
        }
    }

    public function show($id)
    {
        return response()->json(Conveyance::findorfail($id)->get(),200);
    }

    public function destroy($id)
    {
        $conveyance = Conveyance::findOrFail($id);
        if($conveyance->delete()) {
            return response()->json([
                'success' => true,
                'conveyance' => $conveyance
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!!'
            ],400);
        }
    }
}
