<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;
class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::all();
        return view('companies.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
        $company->save();

        return redirect()->route('companies.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
