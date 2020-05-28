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
  <form action="{{ route('supervisor.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
      Register Supervisor
    </h5>
    {{-- <div class="form-desc">
      Validation of the form is made possible using powerful validator plugin for bootstrap. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Learn more about Bootstrap Validator</a>
    </div> --}}
    <div class="form-group">
      <label for="">Name</label>
      <input name="name" class="form-control" placeholder="Name" id="name" type="text">
    </div>
    <div class="form-group">
      <label for="">Email</label>
       <input name="email" class="form-control" placeholder="Email" type="email">
    </div>
    <div class="form-group">
      <label for="">Phone</label>
       <input name="phone" class="form-control" placeholder="Phone" type="text">
    </div>
    <div class="form-group">
      <label for="">Office Email address</label>
      <input name="officeEmail" class="form-control" placeholder="Office Email address" type="email">
    </div>
    <div class="form-group">
      <label for="">Department</label>
      <select name="department" class="form-control">
          <option>
              Software
          </option>
          <option>
              Software
          </option>
          <option>
              Software
          </option>
          <option>
              Software
          </option>
          <option>
              Software
          </option>
          <option>
              Software
          </option>
      </select>
    </div>
    <div class="form-group">
      <label> Image</label>
      <input name="image" type="file" class="form-control">
    </div>
    <div class="form-check">
      <label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to terms and conditions</label>
    </div>
    <div class="form-buttons-w">
      <button class="btn btn-primary disabled" type="submit"> Submit</button>
    </div>
  </form>
</div>

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