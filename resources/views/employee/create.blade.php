@extends('layouts.master')
@section('title','Add New Employee')

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
    <form action="{{ route('employee.store') }}" id="myForm" data-toggle="validator" method="POST" enctype="multipart/form-data">
      @method('POST')
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
                    <input name="name" class="form-control" placeholder="Name" id="name" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
              </div>
             
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Phone</label>
                      <input name="phone" class="form-control" placeholder="Phone" type="text">
                    </div>
                  </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for=""> Date of Birth</label>
                    <input name="dob" class="single-daterange form-control" placeholder="Date of birth" type="text" value="04-12-1978">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Blood Group</label>
                        <select name="bloodGroup" class="form-control">
                        <option value="A+">
                            A+
                        </option>
                        <option value="A-">
                            A-
                        </option>
                        <option value="B+">
                            B+
                        </option>
                        <option value="B-">
                            B-
                        </option>
                        <option value="AB+">
                            AB+
                        </option>
                        <option value="AB-">
                            AB-
                        </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Marital Status</label>
                        <select name="maritaStatus" class="form-control" id="">
                            <option value="Mariied">
                                Mariied
                            </option>
                            <option value="Unmariied">
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
                        <option value="Male">
                            Male
                        </option>
                        <option value="Female">
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
                        <input name="officeEmail" class="form-control" placeholder="Office Email address" type="email">
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for=""> Employee Unique ID</label>
                    <input name="employeeId" class="form-control" placeholder="Employee Unique ID" type="text">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for=""> Employee Type</label>
                <select name="employeeType" class="form-control" id="">
                    <option value="Full Time">
                        Full Time
                    </option>
                    <option value="Part Time">
                        Part Time
                    </option>
                </select>
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Bank Name</label>
                        <select name="bankName" class="form-control">
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
                    <input name="accountType" class="form-control" placeholder="Accout Type" type="text">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Account Number</label>
                <input name="accountNumber" class="form-control" placeholder="Account Number" type="text">
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Supervisor</label>
                        <select name="supervisorId" class="form-control">
                          @foreach ($supervisors as $supervisor)
                              <option value="{{ $supervisor->id }}">
                                {{ $supervisor->name}}
                              </option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Department</label>
                    <select name="department" class="form-control">
                    @foreach ($departments as $department)
                        
                            <option value="{{ $department->name }}">
                                {{ $department->name }}
                            </option>
                        
                    @endforeach
                  </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <select name="designation" class="form-control">
                        @foreach ($designations as $designation)
                            <option value="{{ $designation->name }}">
                                {{ $designation->name }} 
                            </option>
                        @endforeach
                      </select>
                        
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Salary</label>
                        <input name="salary" type="text" class="form-control" placeholder="Salary">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Medication</label>
                        <input name="medication" class="form-control" placeholder="Medication" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Medical Leaves (Days)</label>
                    <input name="medicalLeaves" class="form-control" placeholder="Medical Leaves (Days)" type="text">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Annual Leaves (Days)</label>
                        <input name="annualLeaves" class="form-control" placeholder="Annual Leaves (Days)" type="text">
                    </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Casual Leaves (Days)</label>
                    <input name="casualLeaves" class="form-control" placeholder="Casual Leaves (Days)" type="text">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="">Joining Date</label>
                        <input name="joiningDate" class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/2020">
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
                <textarea name="presentAddrss" id="" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <label for="">Parmanent Address</label>
                <textarea name="parmanentAddress" id="" class="form-control"></textarea>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Emergency Contact Name</label>
                    <input name="emergencyContactName" class="form-control" placeholder="Emergency Contact Name" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Emergency Contact Relation</label>
                    <input name="emergencyContactRelation" class="form-control" placeholder="Emergency Contact Relation" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="emergencyContactphone">Emergency Phone</label>
                    <input name="emergencyContactphone" class="form-control" placeholder="Emergency Contact Phone" type="text">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Emergency Contact Address</label>
                    <textarea name="emergencyContactAddress" id="" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              <div class="form-buttons-w text-right">
                <button class="btn btn-primary" type="submit">Submit Form</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div><!--------------------
                START - Color Scheme Toggler
                -------------------->
           
                <!--------------------
                END - Color Scheme Toggler
                --------------------><!--------------------
                START - Demo Customizer
                -------------------->
                
                <!--------------------
                END - Chat Popup Box
                -------------------->
              </div>
@endsection
@push('js')
<script>
// $('#myForm').validator()
$(function(){
        $("#stepContent2").click(function(){ // when the button is clicked...
            var wizard = $("#stepContent1"); // cache the form element selector
            if(!wizard.validate().element( "#name" )){ // validate the input field
                wizard.validate().focusInvalid(); // focus it if it was invalid
            }

        })
    })
</script>
    

@endpush