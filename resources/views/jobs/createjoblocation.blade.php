@extends('layouts.master')
@section('title','Create Job Location')

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
  <form action="{{ route('joblocation.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
      Add Job Location
    </h5>
    <div class="form-group">
      <label for="">City</label>
      <input name="city" class="form-control" placeholder="Name" id="name" type="text">
    </div>
    <div class="form-group">
        <label for="">Country</label>
        <input name="country" class="form-control" placeholder="Name" id="name" type="text">
      </div>
      <div class="form-group">
        <label for="">Address</label>
        <textarea name="locationAddress" id="" class="form-control" rows="4"></textarea>
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