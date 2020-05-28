<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conveyance;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ConveyanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $conveyances = DB::table('conveyances')
        //                 ->join('employees','conveyances.employee_id','=','employees.id')
        //                 ->select('conveyances.*','employees.name')
        //                 ->get();
         $conveyances = Conveyance::where('status',0)->get();
        return view('conveyance.index',compact('conveyances'));
    }

    public function conveyance_history()
    {
        // $conveyances = DB::table('conveyances')
        //                 ->join('employees','conveyances.employee_id','=','employees.id')
        //                 ->select('conveyances.*','employees.name')
        //                 ->get();
        $conveyances = Conveyance::all();
        return view('conveyance.conveyance_history',compact('conveyances'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function approve($id)
    {
        $conveyance = Conveyance::findOrFail($id);
        $conveyance->status = "1";
        $conveyance->save();
        return redirect()->route('conveyance.index');
    }

    public function decline($id)
    {
        $conveyance = Conveyance::findOrFail($id);
        $conveyance->status = "1";
        $conveyance->save();
        return redirect()->route('conveyance.index');
    }


    public function create()
    {
        return view('conveyance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
       $req->validate([
            'subject' => 'required|min:30|max:250',
            'amount' => 'required',
            'billDate' => 'required'
        ]);

        $conveyance = new Conveyance();
        $conveyance->employee_id = Auth::id();
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
        $conveyance->save();

        return redirect()->route('conveyance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conveyance = Conveyance::findOrFail($id);
        return view('conveyance.show', compact('conveyance'));
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
        $conveyance = Conveyance::findOrFail($id);
        $conveyance->delete();
        return redirect()->route('conveyance.index');
    }
}
