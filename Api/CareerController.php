<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Designation;
use App\Department;
use App\Jobs;
use App\JobCategories;
use App\JobApplication;
class CareerController extends Controller
{

    public function apply()
    {
        return response()->json(JobCategories::get(),200);
    }

    public function show($id)
    {
        $job = Jobs::findOrFail($id);
        $skills = json_decode($job->skills);

        if($skills){
            return response()->json([
                'success' =>true,
                'department'=>$skills
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
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

        if($jobapplication->save()){
            return response()->json([
                'success' =>true,
                'department'=>$jobapplication
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }

    }
}
