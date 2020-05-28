@extends('layouts.master')
@section('title','Add New Department')

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
  <form action="{{ route('notice.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
      Add Notice
    </h5>

    <div class="form-group">
      <label for="">Title</label>
      <input name="title" class="form-control" placeholder="Title" type="text">
    </div>
    <div class="form-group">
      <label for="">Notice Body</label>
      <textarea name="noticeBody" id="" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
      <label for="">Web Link</label>
      <input name="weblink" class="form-control" placeholder="Web Link" type="text">
    </div>
    <div class="form-group">
      <label for="">Attechment</label>
      <input name="file" class="form-control" placeholder="Name" type="file">
    </div>
    <div class="form-group">
        <label for="">Notice For</label>
        <select name="noticeFor" class="form-control" id="noticefor">
          <option value="1">For ALL</option>
          <option value="department">Department</option>
          <option value="designation">Designation</option>
          <option value="employee">Employee</option>
      </select>
    </div>
    <div class="form-group">
        <label for="">Viewer</label>
        <select name="viewer[]" id="viewer" class="form-control select2" multiple="true">
          {{-- @foreach ($viewers as $view) --}}
          {{-- <option value="{{ $view->skillName }}">{{ $skill->skillName }}</option> --}}
          {{-- @endforeach --}}
      </select>
    </div>

    <div class="form-group">
        <label for="">Status</label>
        <select name="status" class="form-control">
          <option value="1">Publish</option>
          <option value="0">For ALL</option>
      </select>
    </div>
  
    <div class="form-buttons-w">
      <button class="btn btn-primary disabled" type="submit"> Submit</button>
    </div>
  </form>
</div>

</div>
@endsection
@push('js')
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
// $('#myForm').validator()
// $(function(){
        
//     })

        $('#noticefor').change(function(){
			var noticefor = $('#noticefor').val();
            console.log(noticefor);
            if(noticefor == 'department'){
              $('#viewer').prop("disabled",false);
                $('#viewer').html();
                var option = "";
                $.get("/get-department", function(data){
                    //data = JSON.parse(data)
                    console.log(data);
                    data.forEach(el => {
                        console.log(el.name)
                        option += "<option value='"+el.id+"'>"+el.name+"</option>"
                    });
                    $('#viewer').html(option);
                })
            }else if(noticefor == 'designation'){
              $('#viewer').prop("disabled",false);
                $('#viewer').html();
                var option = "";
                $.get("/get-designation", function(data){
                    //data = JSON.parse(data)
                    //console.log(data);
                    data.forEach(el => {
                        //console.log(el.name)
                        option += "<option value='"+el.id+"'>"+el.name+"</option>"
                    });
                    $('#viewer').html(option);
                })
            }else if(noticefor == '4'){
              $('#viewer').prop("disabled",false);
                $('#viewer').html();
                var option = "";
                $.get("/get-employee", function(data){
                    //data = JSON.parse(data)
                    //console.log(data);
                    data.forEach(el => {
                        //console.log(el.name)
                        option += "<option value='"+el.id+"'>"+el.name+"</option>"
                    });
                    $('#viewer').html(option);
                })
            }else if(noticefor == '1'){
                $( "#viewer" ).prop( "disabled", true );
            }else{
                $('#viewer').prop("disabled",false);
            }
		})

</script>
    

@endpush