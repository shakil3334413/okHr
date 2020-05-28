<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Accounts;
use App\Employee;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Accounts::get(),200);
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
            "employee_id" => "required",
            "gross_salary" => "required",
            "festival_bonus" => "required",
            "overtime_scope" => "required",
            "basic_salary" => "required",
            "incriment_type" => "required"
        ]);

        $account = new Accounts();
        $account->employee_id = $request->employee_id;
        $account->gross_salary = $request->gross_salary;
        $account->basic_salary = $request->basic_salary;
        $account->house_rent = $request->house_rent;
        $account->medical = $request->medical;
        $account->festival_bonus = $request->festival_bonus;
        $account->overtime_scope = $request->overtime_scope;
        $account->overtime_rate = $request->overtime_rate;
        $account->performance_bonus = $request->performance_bonus;
        $account->incriment_type = $request->incriment_type;
        if($account->save()){
            return response()->json([
                'success' => true,
                'leave' => $account
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
        $account = Accounts::findOrFail($id);
        if($account->gross_salary == false){
            $basic = $account->basic_salary;
            $medical = $account->basic_salary * ($account->medical / 100);
            $house = $account->basic_salary * ($account->house_rent / 100);
            $total = $basic + $medical + $house;
          }else{
            $total = $account->basic_salary;
          }
          if($account->findorfail($id)){
            return response()->json([
                'success' => true,
                'leave' => $account
            ],201);
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
        $account = Accounts::findOrFail($id);
        if($account->delete()){
            return response()->json([
                'success' => true,
                'leave' => $account
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
