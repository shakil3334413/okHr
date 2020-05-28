<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\JobApplication;
class JobApplicationController extends Controller
{
    public function postApplication(Request $req)
    {
        
        $validator = Validator::make($req->all(),[
            'jobCategory' => 'required',
            'candidateName' => 'required',
            'candidateEmail' => 'required',
            'candidatePhone' => 'required',
            'gender' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'resume' => 'required|mimes:pdf|max:10000',
            'coverLetter' => 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ],422);
        }

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

        if($jobapplication->save()) {
            return response()->json([
                'success' => true,
                'message' => 'Application Done!!'
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong!!'
            ],400);
        }
    }
}
