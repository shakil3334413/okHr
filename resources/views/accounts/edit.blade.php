@extends('layouts.master')
@section('content')
<div class="content-box">
    <div class="element-wrapper">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
      <div class="element-box">
      <form action="{{ route('employee.update',$employee->id) }}" id="myForm" data-toggle="validator" method="POST" enctype="multipart/form-data">
        @method('PUT')
          @csrf
          <div class="steps-w">
            <div class="step-triggers">
              <a class="step-trigger active" href="#stepContent1">Personal Information</a><a class="step-trigger" href="#stepContent2">Offical Information</a><a class="step-trigger" href="#stepContent3">Third Step</a>
            </div>
            <div class="step-contents">
              <div class="step-content active" id="stepContent1">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input name="name" value="{{ $employee->name }}" class="form-control" placeholder="Name" id="name" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Email</label>
                      <input name="email" value="{{ $employee->email}}" class="form-control" placeholder="Email" type="email">
                    </div>
                  </div>
                </div>
               
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                        <label for="">Phone</label>
                        <input name="phone" value="{{ $employee->phone }}" class="form-control" placeholder="Phone" type="text">
                      </div>
                    </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for=""> Date of Birth</label>
                      <input name="dob" class="form-control" placeholder="Date of birth" type="date" value="{{ $employee->dob }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Blood Group</label>
                          <select name="bloodGroup" class="form-control">
                          <option value="A+" {{ $employee->bloodGroup == 'A+' ? "selected" : ""}}>
                              A+
                          </option>
                          <option value="A-" {{ $employee->bloodGroup == 'A-' ? "selected" : ""}}>
                              A-
                          </option>
                          <option value="B+" {{ $employee->bloodGroup == 'B+' ? "selected" : ""}}>
                              B+
                          </option>
                          <option value="B-" {{ $employee->bloodGroup == 'B-' ? "selected" : ""}}>
                              B-
                          </option>
                          <option value="AB+" {{ $employee->bloodGroup == 'AB+' ? "selected" : ""}}>
                              AB+
                          </option>
                          <option value="AB-" {{ $employee->bloodGroup == 'AB-' ? "selected" : ""}}>
                              AB-
                          </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Marital Status</label>
                          <select name="maritaStatus" class="form-control" id="">
                              <option value="Mariied" {{ $employee->maritaStatus == 'Mariied' ? "selected" : ""}}>
                                  Mariied
                              </option>
                              <option value="Unmariied" {{ $employee->maritaStatus == 'Unmariied' ? "selected" : ""}}>
                                  Unmariied
                              </option>
                          </select>
                      </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Gender</label>
                          <select name="gender" class="form-control">
                          <option value="Male" {{ $employee->gender == 'Male' ? "selected" : ""}}>
                              Male
                          </option>
                          <option value="Female" {{ $employee->gender == 'Female' ? "selected" : ""}}>
                              Female
                          </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label> Image</label>
                      <input name="image" type="file" class="form-control">
                    </div>
                  </div>
                </div>
                
                
                <div class="form-buttons-w text-right">
                  <a class="btn btn-primary step-trigger-btn" href="#stepContent2"> Continue</a>
                </div>
              </div>
              <div class="step-content" id="stepContent2">
              
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Office Email address</label>
                          <input name="officeEmail" value="{{ $employee->officeEmail }}" class="form-control" placeholder="Office Email address" type="email">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for=""> Employee Unique ID</label>
                      <input name="employeeId" value="{{ $employee->employeeId }}" class="form-control" placeholder="Employee Unique ID" type="text">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for=""> Employee Type</label>
                  <select name="employeeType" class="form-control" id="">
                      <option value="Full Time" {{ $employee->employeeType == 'Full Time' ? "selected" : ""}}>
                          Full Time
                      </option>
                      <option value="Part Time" {{ $employee->employeeType == 'Part Time' ? "selected" : ""}}>
                          Part Time
                      </option>
                  </select>
                </div>
  
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Bank Name</label>
                          <select name="bankName" class="form-control">
                              <option value="">
                                  Select Bank
                              </option>
                              <option>
                                  Bank
                              </option>
                              <option>
                                  Bank
                              </option>
                              <option>
                                  Bank
                              </option>
                              <option>
                                  ABank
                              </option>
                              <option>
                                  ABank
                              </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for=""> Accout Type</label>
                      <input name="accountType" value="{{ $employee->accountType }}" class="form-control" placeholder="Accout Type" type="text">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Account Number</label>
                  <input name="accountNumber" value="{{ $employee->accountNumber }}" class="form-control" placeholder="Account Number" type="text">
                </div>
  
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Supervisor</label>
                          <select name="supervisorId" class="form-control">
                              <option value="">
                                  Slect Supervisor
                              </option>
                              <option value="Mr. Omuk">
                                  Mr. Capten
                              </option>
                              <option value="Mr. Omuk">
                                  Mr. Capten
                              </option>
                              <option value="Mr. Omuk">
                                  Mr. Capten
                              </option>
                              <option value="Mr. Omuk">
                                  Mr. Capten
                              </option>
                              <option>
                                  Mr. Capten
                              </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Department</label>
                          <select name="department" class="form-control">
                              <option value="">
                                  Select Department
                              </option>
                              <option value="Softwate Devalopment">
                                  Software
                              </option>
                              <option value="Softwate Devalopment">
                                  Software
                              </option>
                              <option value="Softwate Devalopment">
                                  Software
                              </option>
                              <option value="Softwate Devalopment">
                                  Software
                              </option>
                              <option value="Softwate Devalopment">
                                  Software
                              </option>
                          </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Designation</label>
                          <select name="designation" class="form-control">
                            <option value="">
                                Select Designation
                            </option>
                              <option value="Software Dev">
                                  Software Engineer
                              </option>
                              <option value="Software Dev">
                                  Software Engineer
                              </option>
                              <option value="Software Dev">
                                  Software Engineer
                              </option>
                              <option value="Software Dev">
                                  Software Engineer
                              </option>
                              <option value="Software Dev">
                                  Software Engineer
                              </option>
                              <option value="Software Dev">
                                  Software Engineer
                              </option>
                          </select>
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Salary</label>
                          <input name="salary" value="{{ $employee->salary }}" type="text" class="form-control" placeholder="Salary">
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Medication</label>
                          <input name="medication" value="{{ $employee->medication }}" class="form-control" placeholder="Medication" type="text">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Medical Leaves (Days)</label>
                      <input name="medicalLeaves" value="{{ $employee->medicalLeaves }}"" class="form-control" placeholder="Medical Leaves (Days)" type="text">
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Annual Leaves (Days)</label>
                          <input name="annualLeaves" value="{{ $employee->annualLeaves }}"" class="form-control" placeholder="Annual Leaves (Days)" type="text">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Casual Leaves (Days)</label>
                      <input name="casualLeaves" value="{{ $employee->casualLeaves }}"" class="form-control" placeholder="Casual Leaves (Days)" type="text">
                    </div>
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label for="">Joining Date</label>
                          <input name="joiningDate" class="form-control" placeholder="Date of birth" type="date" value="{{ $employee->joiningDate }}">
                      </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Is Supervisor ?</label>
                      <select name="isSupervisor" class="form-control">
                          <option value="false">
                              No
                          </option>
                          <option value="true">
                              Yes
                          </option>
                      </select>
                    </div>
                  </div>
                </div>
  
  
  
              
                <div class="form-buttons-w text-right">
                  <a class="btn btn-primary step-trigger-btn" href="#stepContent3"> Continue</a>
                </div>
              </div>
              <div class="step-content" id="stepContent3">
  
                <div class="form-group">
                  <label for="">Present Address</label>
                  <textarea name="presentAddrss" id="" class="form-control">{{ $employee->presentAddrss }}</textarea>
                </div>
                <div class="form-group">
                  <label for="">Parmanent Address</label>
                  <textarea name="parmanentAddress" id="" class="form-control">{{ $employee->parmanentAddress }}</textarea>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Emergency Contact Name</label>
                      <input name="emergencyContactName" value="{{ $employee->emergencyContactName }}" class="form-control" placeholder="Emergency Contact Name" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Emergency Contact Relation</label>
                      <input name="emergencyContactRelation" value="{{ $employee->emergencyContactRelation }}" class="form-control" placeholder="Emergency Contact Relation" type="text">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="emergencyContactphone">Emergency Phone</label>
                      <input name="emergencyContactphone" value="{{ $employee->emergencyContactphone }}" class="form-control" placeholder="Emergency Contact Phone" type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Emergency Contact Address</label>
                      <textarea name="emergencyContactAddress" id="" class="form-control">{{ $employee->emergencyContactAddress }}</textarea>
                    </div>
                  </div>
                </div>
                <div class="form-buttons-w text-right">
                  <button class="btn btn-primary" type="submit">Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</div>
    
@endsection