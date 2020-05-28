<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Employee;
use App\Supervisor;
use App\Department;
use App\Designation;
class EmployeeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formateDate($date)
    {
        $date = explode("/",$date);
        return $date[2]."-".$date[0]."-".$date[1];
    }
    public function index()
    {
       $employees = Employee::all();

        return view('employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supervisors = Supervisor::all();
        $departments = Department::all();
        $designations = Designation::all();
        return view('employee.create',compact('supervisors','departments','designations'));
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
            "name" => "required | min:3",
            "email" => "required | unique:employees,email",
            "phone" => "required | min:11",
            "dob" => "required",
            "bloodGroup" => "required",
            "maritaStatus" => "required",
            "image" => "required|mimes:jpeg,jpg,png",
            "officeEmail" => "required | unique:employees,officeEmail",
            "employeeId" => "unique:employees,employeeId",
            "employeeType" => "required",
            "supervisorId" => "required",
            "department" => "required",
            "designation" => "required",
            "salary" => "required | numeric",
            "medicalLeaves" => "required | numeric",
            "annualLeaves" => "required | numeric",
            "casualLeaves" => "required | numeric",
            "joiningDate" => "required",
            "presentAddrss" => "required",
            "parmanentAddress" => "required"
        ]);
        if($request->image){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img/employee'), $imageName);
        }else{
            $imageName = "";
        }

        $employee = new Employee();
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->bloodGroup = $request->bloodGroup;
        $employee->maritaStatus = $request->maritaStatus;
        $employee->dob =  $this->formateDate($request->dob);
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->officeEmail = $request->officeEmail;
        $employee->image = $imageName;
        $employee->employeeId = $request->employeeId;
        $employee->employeeType = $request->employeeType;
        $employee->bankName = $request->bankName;
        $employee->accountType = $request->accountType;
        $employee->accountNumber = $request->accountNumber;
        $employee->department = $request->department;
        $employee->designation = $request->designation;
        $employee->supervisorId = $request->supervisorId;
        $employee->salary = $request->salary;
        $employee->medication = $request->medication;
        $employee->annualLeaves = $request->annualLeaves;
        $employee->casualLeaves = $request->casualLeaves;
        $employee->medicalLeaves = $request->medicalLeaves;
        $employee->joiningDate = $this->formateDate($request->joiningDate);
        $employee->isSupervisor = $request->isSupervisor;
        $employee->presentAddrss = $request->presentAddrss;
        $employee->parmanentAddress = $request->parmanentAddress;
        $employee->emergencyContactName = $request->emergencyContactName;
        $employee->emergencyContactRelation = $request->emergencyContactRelation;
        $employee->emergencyContactAddress = $request->emergencyContactAddress;
        $employee->emergencyContactphone = $request->emergencyContactphone;
        $employee->save();

        return redirect()->route('employee.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
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
        $request->validate([
            "name" => "required | min:3",
            "email" => "required | unique:employees,email,".$id,
            "phone" => "required | min:11",
            "dob" => "required",
            "bloodGroup" => "required",
            "maritaStatus" => "required",
            "image" => "mimes:jpeg,jpg,png",
            "officeEmail" => "required | unique:employees,officeEmail,".$id,
            "employeeId" => "unique:employees,employeeId,".$id,
            "employeeType" => "required",
            "salary" => "required | numeric",
            "medicalLeaves" => "required | numeric",
            "annualLeaves" => "required | numeric",
            "casualLeaves" => "required | numeric",
            "joiningDate" => "required",
            "presentAddrss" => "required",
            "parmanentAddress" => "required"
        ]);

        $employee = Employee::findOrFail($id);

        if($request->image){
            $image_path = "img/employee/".$employee->image;
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img/employee'), $imageName);
        }else{
            $imageName = $employee->image;
        }

        if($request->bankName){
            $bankName = $request->bankName;
        }else{
            $bankName = $employee->bankName;
        }

        if($request->supervisorId){
            $supervisorId = $request->supervisorId;
        }else{
            $supervisorId = $employee->supervisorId;
        }

        if($request->department){
            $department = $request->department;
        }else{
            $department = $employee->department;
        }

        if($request->designation){
            $designation = $request->designation;
        }else{
            $designation = $employee->designation;
        }
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->bloodGroup = $request->bloodGroup;
        $employee->maritaStatus = $request->maritaStatus;
        $employee->dob =  $request->dob;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->officeEmail = $request->officeEmail;
        $employee->image = $imageName;
        $employee->employeeId = $request->employeeId;
        $employee->employeeType = $request->employeeType;
        $employee->bankName = $bankName;
        $employee->accountType = $request->accountType;
        $employee->accountNumber = $request->accountNumber;
        $employee->department = $department;
        $employee->designation = $designation;
        $employee->supervisorId = $supervisorId;
        $employee->salary = $request->salary;
        $employee->medication = $request->medication;
        $employee->annualLeaves = $request->annualLeaves;
        $employee->casualLeaves = $request->casualLeaves;
        $employee->medicalLeaves = $request->medicalLeaves;
        $employee->joiningDate = $request->joiningDate;
        $employee->isSupervisor = $request->isSupervisor;
        $employee->presentAddrss = $request->presentAddrss;
        $employee->parmanentAddress = $request->parmanentAddress;
        $employee->emergencyContactName = $request->emergencyContactName;
        $employee->emergencyContactRelation = $request->emergencyContactRelation;
        $employee->emergencyContactAddress = $request->emergencyContactAddress;
        $employee->emergencyContactphone = $request->emergencyContactphone;
        $employee->save();

        return redirect()->route('employee.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
