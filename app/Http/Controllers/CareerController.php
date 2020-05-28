<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Designation;
use App\Department;
use App\Jobs;
use App\JobCategories;
use App\JobApplication;
class CareerController extends Controller
{
    public function index() 
    {
        $designations = Designation::all();
        $jobs = Jobs::all();
        return view('career.index',compact('designations','jobs'));
    }


    public function show($id)
    {
        $job = Jobs::findOrFail($id);
        $skills = json_decode($job->skills);
        return view('career.show',compact('job','skills'));
    }

    public function apply()
    {
        $jobcats = JobCategories::all();
        return view('career.apply',compact('jobcats'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'jobCategory' => 'required',
            'candidateName' => 'required',
            'candidateEmail' => 'required',
            'candidatePhone' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'resume' => 'required|mimes:pdf|max:10000',
            'coverLetter' => 'required',
        ]);

        $imagePath = request('image')->store('candidateImage');

        $resumePath = request('resume')->store('candidateResume');
        
        
        $jobapplication = new JobApplication();
        $jobapplication->jobCategory = $req->jobCategory;
        $jobapplication->candidateName = $req->candidateName;
        $jobapplication->candidateEmail = $req->candidateEmail;
        $jobapplication->candidatePhone = $req->candidatePhone;
        $jobapplication->gender = $req->gender;
        $jobapplication->image = $imagePath;
        $jobapplication->resume = $resumePath;
        $jobapplication->coverLetter = $req->coverLetter;

        $jobapplication->save();
        return redirect()->route('career.index');
    }
}

