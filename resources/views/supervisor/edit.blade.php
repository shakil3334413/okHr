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
        <div class="element-box">
          <form action="{{ route('supervisor.update',$supervisor->id) }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
            @method('PUT')
                @csrf
            <h5 class="form-header">
              Register Supervisor
            </h5>
            {{-- <div class="form-desc">
              Validation of the form is made possible using powerful validator plugin for bootstrap. <a href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Learn more about Bootstrap Validator</a>
            </div> --}}
            <div class="form-group">
              <label for="">Name</label>
              <input name="name" value="{{ $supervisor->name }}" class="form-control" placeholder="Name" id="name" type="text">
            </div>
            <div class="form-group">
              <label for="">Email</label>
               <input name="email" value="{{ $supervisor->email }}" class="form-control" placeholder="Email" type="email">
            </div>
            <div class="form-group">
              <label for="">Phone</label>
               <input name="phone" value="{{ $supervisor->Phone }}" class="form-control" placeholder="Phone" type="text">
            </div>
            <div class="form-group">
              <label for="">Office Email address</label>
              <input name="officeEmail" value="{{ $supervisor->officeEmail }}" class="form-control" placeholder="Office Email address" type="email">
            </div>
            <div class="form-group">
              <label for="">Department</label>
              <select name="department" class="form-control">
                  <option value="">
                      Select Department
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
</div>
    
@endsection