<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Companies;
use Faker\Provider\ar_JO\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Companies::get(),200);
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
            'companyName' => 'required',
            'companyEmail' => 'required',
            'companyPhone' => 'required',
            'companyWebsite' => 'required',
            'companyLogo' => 'required',
            'companyAddress' => 'required'
        ]);
        $path = request('companyLogo')->store('companyLogo');

        $company = new Companies();
        $company->companyName = $request->companyName;
        $company->companyEmail = $request->companyEmail;
        $company->companyPhone = $request->companyPhone;
        $company->companyWebsite = $request->companyWebsite;
        $company->companyLogo = $path;
        $company->companyAddress = $request->companyAddress;
        if($company->save()){
            return response()->json([
                'success' => true,
                'leave' => $company
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
        $company=Companies::findOrfail($id);
        if($company){
            return response()->json([
                'success' =>true,
                'department'=>$company
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
        $company=Companies::findOrfail($id);
        if($company->delete()){
            return response()->json([
                'success' =>true,
                'department'=>$company
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }
}
