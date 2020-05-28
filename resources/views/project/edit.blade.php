@extends('layouts.master')
@section('title','Edit Project')
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
        <div class="element-box">
          <form action="{{ route('project.update',$project->id) }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
            @method('PUT')
                @csrf
            <h5 class="form-header">
              Update Project
            </h5>
            <div class="form-group">
              <label for="">Name</label>
              <input name="name" value="{{ $project->name }}" class="form-control" placeholder="Name" id="name" type="text">
            </div>
        
            <div class="form-group">
              <label for="">Supervisor</label>
              <select name="supervisor_id" class="form-control">
                @foreach ($supervisors as $supervisor)
                    <option value="{{ $supervisor->id }}">
                      {{ $supervisor->name}}
                    </option>
                @endforeach
              </select>
            </div>
        
            <div class="form-group">
              <label for="">Assignee</label>
               <input name="assignee" value="{{ $project->assignee }}" class="form-control" placeholder="Assignee" type="text">
            </div>
            <div class="form-group">
              <label for="">Description</label>
               <textarea name="description" class="form-control">{{ $project->description }}</textarea>
            </div>
            <div class="form-buttons-w">
              <button class="btn btn-primary disabled" type="submit"> Submit</button>
            </div>
          </form>
        </div>
    </div>
</div>
    
@endsection