<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;

class JobApplicationController extends Controller
{
    public function index()
    {
        $jobapplications = JobApplication::latest()->get();
        return view('jobs.jobapplications',compact('jobapplications'));
    }

    public function show($id)
    {
        $jobapplication = JobApplication::findOrFail($id);
        return view('jobs.showjobapplication',compact('jobapplication'));
    }

    public function destroy($id)
    {
        $jobapplication = JobApplication::findOrFail($id);
        $jobapplication->delete();
        return redirect()->route('jobapplication.index');
    }

    public function board()
    {
        return view('jobs.board');
    }

}
