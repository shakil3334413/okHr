<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobCategories;
use App\Skills;
use App\JobLocation;
use App\Jobs;
use App\Companies;
class JobController extends Controller
{
    /**
     * Job category 
     * create
     * delete
     * index
     */
    public function jobCategories() {
        $jobCategories = JobCategories::all();
        return view('jobs.jobcategories')->with('jobCategories',$jobCategories);
    }
    public function storeJobCategories(Request $req) {
        $req->validate([
            'name' => 'required|min:3'
        ]);
        // return $req;

        $jobCategory = new JobCategories();
        $jobCategory->name = $req->name;
        $jobCategory->save();
        return redirect()->route('jobCategories');
    }
    public function createJobCategories() {
        return view('jobs.createjobcategory');
    }
    public function deleteJobCategories($id) {
        $jobCategory = JobCategories::findOrFail($id);
        $jobCategory->delete();
        return redirect()->route('jobCategories');
    }

    /**
     * Job Skills 
     * create
     * delete
     * index
     */

     public function skills() {
         $skills = Skills::all();
         return view('jobs.skills')->with('skills',$skills);
     }

     public function createSkills() {
         $jobcategories = JobCategories::all();
         return view('jobs.createskills',compact('jobcategories'));
     }

     public function storeSkills(Request $req){
         $req->validate([
            'jobCategory' => 'required',
            'skillName' => 'required'
         ]);

         $skill = new Skills();

         $skill->jobCategory = $req->jobCategory;
         $skill->skillName = $req->skillName;
         $skill->save();
        return redirect()->route('skills.index');
     }

     public function deleteSkills($id) {
        $skill = Skills::findOrFail($id);
        $skill->delete();
        return redirect()->route('skills.index');
     }

     /**
     * Job Skills 
     * create
     * delete
     * index
     */

    public function jobLocation() {
        $joblocations = JobLocation::all();
        return view('jobs.joblocation')->with('joblocations',$joblocations);
    }

    public function createJobLocation() {
        return view('jobs.createjoblocation');
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
        $joblocation->save();
       return redirect()->route('joblocation.index');
    }

    public function deleteJobLocation($id) {
       $skill = JobLocation::findOrFail($id);
       $skill->delete();
       return redirect()->route('joblocation.index');
    }
    /**
     *  Jobs
     */


    public function jobs() {
        $jobs = Jobs::all();
       // dd($jobs);
        return view('jobs.jobs',compact('jobs'));
        
    }

    public function createJobs() {
        $jobCategories = JobCategories::all();
        $joblocations = JobLocation::all();
        $skills = Skills::select('skillName')->distinct()->get();
        $companies = Companies::all();
        return view('jobs.createjobs',compact('jobCategories','joblocations','skills','companies'));
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
        $job->save();
       return redirect()->route('jobs.index');
    }

    public function deleteJobs($id) {
        $jobs = Jobs::findOrFail($id);
        $jobs->delete();
        return redirect()->route('jobs.index');
    }

    public function jobShow($id) {
        $job = Jobs::findOrFail($id);
        $skills = json_decode($job->skills);
        // return gettype($skills);
        return view('jobs.jobshow',compact('job','skills'));
    }

    
}
