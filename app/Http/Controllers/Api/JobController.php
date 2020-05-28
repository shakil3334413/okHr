<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\JobCategories;
use App\Skills;
use App\JobLocation;
use App\Jobs;
use App\Companies;
class JobController extends Controller
{
    public function jobCategories() {
        return response()->json(JobCategories::get(),200);
    }

    public function storeJobCategories(Request $req) {
        $req->validate([
            'name' => 'required|min:3'
        ]);
        $jobCategory = new JobCategories();
        $jobCategory->name = $req->name;
        if($jobCategory->save()){
            return response()->json([
                'success' => true,
                'leave' => $jobCategory
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    public function deleteJobCategories($id) {

        $jobCategory=JobCategories::findOrfail($id);
        if($jobCategory->delete()){
            return response()->json([
                'success' =>true,
                'department'=>$jobCategory
            ]);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    public function skills() {
        return response()->json(Skills::get(),200);
    }

    public function storeSkills(Request $req){
        $req->validate([
           'jobCategory' => 'required',
           'skillName' => 'required'
        ]);

        $skill = new Skills();

        $skill->jobCategory = $req->jobCategory;
        $skill->skillName = $req->skillName;
        if($skill->save()){
            return response()->json([
                'success' => true,
                'leave' => $skill
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    public function deleteSkills($id) {
        $skill = Skills::findOrFail($id);
        if($skill->delete()){
            return response()->json([
                'success' => true,
                'leave' => $skill
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
     }

     public function jobLocation() {
        return response()->json(JobLocation::get(),200);
    }

    public function storeJobLocation(Request $req) {

        $req->validate([
           'city' => 'required',
           'country' => 'required',
           'locationAddress' => 'required'
        ]);

        $locationName = $req->city .",".$req->country;


        $joblocation = new JobLocation();

        $joblocation->locationName = $locationName;
        $joblocation->locationAddress = $req->locationAddress;
        if($joblocation->save()){
            return response()->json([
                'success' => true,
                'leave' => $joblocation
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    public function deleteJobLocation($id) {
        $joblocation = JobLocation::findOrFail($id);
        if($joblocation->delete()){
            return response()->json([
                'success' => true,
                'leave' => $joblocation
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
     }

     public function jobs() {

        return response()->json(Jobs::get(),200);

    }

    public function storeJobs(Request $req) {
        // return $req->skills;
        $req->validate([
            'company_id' => 'required',
            'jobTitle' => 'required',
            'jobDescription' => 'required',
            'jobRequirement' => 'required',
            'jobLocation_id' => 'required',
            'jobCategory_id' => 'required',
            'skills' => 'required',
            'totalPositions' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'status' => 'required'
        ]);

        $job = new Jobs();
        $job->company_id = $req->company_id;
        $job->jobTitle = $req->jobTitle;
        $job->jobDescription = $req->jobDescription;
        $job->jobRequirement = $req->jobRequirement;
        $job->jobLocation_id = $req->jobLocation_id;
        $job->jobCategory_id = $req->jobCategory_id;
        $job->skills = json_encode($req->skills);
        $job->totalPositions = $req->totalPositions;
        $job->startDate = $req->startDate;
        $job->endDate = $req->endDate;
        $job->status = $req->status;
        if($job->save()){
            return response()->json([
                'success' => true,
                'leave' => $job
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    public function deleteJobs($id) {
        $job= Jobs::findOrFail($id);
        if($job->delete()){
            return response()->json([
                'success' => true,
                'leave' => $job
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }

    public function jobShow($id) {
        $job = Jobs::findOrFail($id);
        if($job){
            return response()->json([
                'success' => true,
                'leave' => $job
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => "Something went worng.."
            ]);
        }
    }


}
