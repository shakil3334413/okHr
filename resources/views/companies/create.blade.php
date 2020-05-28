@extends('layouts.master')
@section('title','Add New Project')

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
  <form action="{{ route('companies.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
      Company
    </h5>
    {{-- <div class="form-desc">
      Validation of the form is made possible using powerful validator plugin for bootstrap. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Learn more about Bootstrap Validator</a>
    </div> --}}
    <div class="form-group">
      <label for="">companyName</label>
      <input name="companyName" class="form-control" placeholder="Name" id="name" type="text">
    </div>
    <div class="form-group">
      <label for="">companyEmail</label>
      <input name="companyEmail" class="form-control" placeholder="Email" id="name" type="email">
    </div>
    <div class="form-group">
      <label for="">companyPhone</label>
      <input name="companyPhone" class="form-control" placeholder="companyPhone" id="name" type="text">
    </div>
    <div class="form-group">
      <label for="">companyWebsite</label>
      <input name="companyWebsite" class="form-control" placeholder="companyWebsite" id="name" type="text">
    </div>
    <div class="form-group">
      <label for="">companyLogo</label>
      <input name="companyLogo" class="form-control" placeholder="Name" id="name" type="file">
    </div>
    <div class="form-group">
      <label for="">companyAddress</label>
      <textarea name="companyAddress" id="" class="form-control"  rows="5"></textarea>
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