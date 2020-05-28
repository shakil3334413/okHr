@extends('layouts.master')
@section('title','Create Job Category')

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
  <form action="{{ route('storeJobCategories') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
      Add Job Category
    </h5>
    <div class="form-group">
      <label for="">Name</label>
      <input name="name" class="form-control" placeholder="Name" id="name" type="text">
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