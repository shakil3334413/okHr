@extends('layouts.master')
@section('title','Add new Conveyance')

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
  <form action="{{ route('conveyance.store') }}" id="formValidate" novalidate="true" data-toggle="validator" method="POST" enctype="multipart/form-data">
    @method('POST')
        @csrf
    <h5 class="form-header">
     Add new Conveyance
    </h5>

    <div class="form-group">
      <label for="">Subject</label>
      <textarea name="subject" id="" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="">From</label>
      <input name="from" class="form-control" placeholder="From" type="text">
    </div>
    <div class="form-group">
      <label for="">To</label>
      <input name="to" class="form-control" placeholder="To" type="text">
    </div>
    <div class="form-group">
      <label for="">Transport</label>
      <input name="transport" class="form-control" placeholder="Transport" type="text">
    </div>
    <div class="form-group">
      <label for="">Amount</label>
      <input name="amount" class="form-control" placeholder="Amount" type="text">
    </div>
    <div class="form-group">
      <label for="">Distancet</label>
      <input name="distance" class="form-control" placeholder="Distance" type="text">
    </div>
    <div class="form-group">
      <label for="">Date</label>
      <input name="billDate" class="form-control" placeholder="" type="date">
    </div>
    
    <div class="form-buttons-w">
      <button class="btn btn-primary disabled" type="submit"> Submit</button>
    </div>
  </form>
</div>

</div>
@endsection
@push('js')

    

@endpush