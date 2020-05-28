<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Jobs;
use App\JobApplication;
use App\Notice;
use App\Department;
use App\Attendance;
use App\Conveyance;
use App\Leave;
use Carbon\Carbon;

class HomeController extends Controller
{
    public $today;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->today = Carbon::now();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // echo date('Y-m-d');
        $birthDayPerson = Employee::where('dob',$this->today->toDateString())->get();
        $employeeCount = Employee::count();
        $jobCount = Jobs::count();
        $jobApplicationCount = JobApplication::count();
        $noticeCount = Notice::count();
        $departmentCount = Department::count();
        $birthDayPersonCount = $birthDayPerson->count();
        $presentCount = Attendance::where('inDate',$this->today->toDateString())->count();
        $absentCount = $employeeCount - $presentCount;
        $pendingLeaveCount = Leave::where('status',0)->count();
        $pendingConveyanceCount = Conveyance::where('status',0)->count();
        $todayLate = Attendance::where('inDate',$this->today->toDateString())
                            ->where('inTime' ,'>','10.00')->count();
        return view('home',compact('birthDayPerson','employeeCount','jobCount','jobApplicationCount','noticeCount',
        'departmentCount','birthDayPersonCount','presentCount','absentCount','pendingLeaveCount','pendingConveyanceCount','todayLate'));
    }
}
