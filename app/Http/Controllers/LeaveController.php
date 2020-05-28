<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leave;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leaves = Leave::where('status','0')->get();
        return view('leave.index', compact('leaves'));
    }
    public function leave_history()
    {
        $leaves = Leave::all();
        return view('leave.leave_history', compact('leaves'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leave.create');
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
            $request->session()->flash('alert-danger','Invalide Date');
            return redirect()->route('leave.index');
        }



        $leave = new Leave();
        $leave->employee_id = Auth::id();
        $leave->reason = $request->reason;
        $leave->from_date = $request->from_date;
        $leave->to_date = $request->to_date;
        $leave->type = $request->type;
        $leave->leave_location = $request->leave_location;
        $leave->leave_contact = $request->leave_contact;
        $leave->status = '0';

        if($leave->save()){
            $request->session()->flash('alert-success','Leave Request Done!!');
            return redirect()->route('leave.index');
        }else{
            $request->session()->flash('alert-danger','something went wrong!!');
            return redirect()->route('leave.index');

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
        $leave = Leave::findOrFail($id);
        return view('leave.show', compact('leave'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->status = "1";
        $leave->save();
        return redirect()->route('leave.index');
    }
    public function decline($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->status = "2";
        $leave->save();
        return redirect()->route('leave.index');
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
        $leave->delete();
        return redirect()->route('leave.index');
    }
}
