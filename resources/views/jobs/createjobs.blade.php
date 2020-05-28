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
    <form action="{{ route('jobs.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
        @method('POST')
            @csrf
    <h5 class="form-header">
      Post a new Job
    </h5>
    <div class="form-desc">
      
    </div>
    <div class="form-group">
        <label for="">Select Company</label>
        <select name="company_id" id="" class="form-control">
          @foreach ($companies as $company)
          <option value="{{ $company->id }}">{{ $company->companyName }}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group">
        <label for="">Job Title</label>
        <input name="jobTitle" class="form-control" placeholder="jobTitle" id="name" type="text">
    </div>

    <div class="form-group">
        <label for="">Job Category</label>
        <select name="jobCategory_id" id="" class="form-control">
          @foreach ($jobCategories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
      </select>
    </div>

    <div class="form-group">
        <label for="">Skills</label>
        <select name="skills[]" id="" class="form-control select2" multiple="true">
          @foreach ($skills as $skill)
          <option value="{{ $skill->skillName }}">{{ $skill->skillName }}</option>
          @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="">Job Location</label>
        <select name="jobLocation_id" id="" class="form-control">
          @foreach ($joblocations as $location)
          <option value="{{ $location->id }}">{{ $location->locationName }}</option>
          @endforeach
      </select>
    </div>
   
 
    <div class="form-group">
        <label for="">Total Position</label>
        <input type="text" name="totalPositions" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Job Description</label>
        <textarea name="jobDescription" cols="80" class="ckeditor" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label for="">Job Requirement</label>
        <textarea name="jobRequirement" class="ckeditor" rows="7"></textarea>
    </div>
    <div class="form-group">
        <label for="">Start Date</label>
        <input type="date" name="startDate" class="form-control">
    </div>
    <div class="form-group">
        <label for="">End Date</label>
        <input type="date" name="endDate" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Status</label><br>
        <input type="radio" name="status" value="1">
        <label for="male">Active</label><br>
        <input type="radio" name="status" value="0">
        <label for="male">Deactive</label><br>
    </div>

    
    <div class="form-buttons-w">
        <button class="btn btn-primary disabled" type="submit"> Submit</button>
      </div>
    </form>
     </div>
</div>
@endsection
@push('js')
<script src="{{asset('backend/bower_components/ckeditor/ckeditor.js')}}"></script>
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

<script>
    var REMOVE = '';
    var i=1;
    $(document).ready(function () {
        $('.add_more').click(function () {
            var oneplus=i+1;
            var tr_object = $('tbody').find('tr:first').clone();
            // getting and renaming existing textarea by name.
            $(tr_object).find('textarea[name="question_option_1"]').attr("name", "question_option_"+oneplus+"");
            $(tr_object).find('input').val(''); 
            $(tr_object).find('td:last').html('<a href="javascript:void(0)" class="btn btn-danger remove_more">Remove</a>');
            $('tbody').append(tr_object);
            //replace code
            CKEDITOR.replace("question_option_"+oneplus+"");
            // when i were clicking on add more during my testing , then extra cke-editor id also appending to DOM. so for removing other then first
            // included below code
            $('#cke_question_option_1').each(function() {
                var $ids = $('[id=' + this.id + ']');
                if ($ids.length > 1) {
                    $ids.not(':first').remove();
                }
            });
            i=i+1;
            oneplus++;
        });
        $(document).on('click', '.remove_more', function () {
            var id = $(this).closest('tr').find('.id').val();
            if (id != '') {
                if (REMOVE != '') {
                    REMOVE = REMOVE + ',' + id;
                } else {
                    REMOVE = id;
                }
                $('#id').val(REMOVE);
            }
            $(this).closest('tr').remove();
        });
    });
</script>
    

@endpush