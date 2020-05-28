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
  <form action="{{ route('leave.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
     Request For Leave
    </h5>

    <div class="form-group">
      <label for="">Reason</label>
      <input name="reason" class="form-control" placeholder="Reason" type="text">
    </div>
    <div class="form-group">
      <label for="">From Date</label>
      <input name="from_date" class="form-control" placeholder="From Date" type="date">
    </div>
    <div class="form-group">
      <label for="">To Date</label>
      <input name="to_date" class="form-control" placeholder="To Date" type="date">
    </div>
    <div class="form-group">
      <label for="">Leave Type</label>
      <input name="type" class="form-control" placeholder="Leave Type" type="text">
    </div>
    <div class="form-group">
      <label for="">Leave Location</label>
      <input name="leave_location" class="form-control" placeholder="Leave Location" type="text">
    </div>
    <div class="form-group">
      <label for="">Leave Contact</label>
      <input name="leave_contact" class="form-control" placeholder="Leave Contact" type="text">
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