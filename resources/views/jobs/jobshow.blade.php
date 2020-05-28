@extends('layouts.master')
@section('title','Job Cotegory')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Job
    </h6>
    <div class="element-box">
        <h3>{{ $job->jobTitle }}</h3>
        <h4>{{ $job->jobCategory->name }}</h4>
        <p>{{ $job->totalPositions }}</p>
        <h2>Job Description</h2>
        <p class="para">{!! html_entity_decode($job->jobDescription) !!}</p>
        <h2>Job Requirement</h2>
        <p class="para">{!! html_entity_decode($job->jobRequirement) !!}</p>
        <h2>SKILL</h2>
        <ul>
            @foreach ($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>

        <p>Start Date : {{ $job->startDate }}</p>
        <p>End Date : {{ $job->endDate }}</p>
    <p class="{{ $job->status == 1 ? "text-success" : "text-danger" }}">{{ $job->status == 1 ? "Active" : "Deactice"}}</p>
        
      </div>
    </div>
  </div>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    function delete(id){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false,
        })
        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.value) {
           event.preventDefault();
           document.getElementById('delete-form-'+id).submit();
        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
        })
    }
   

</script>
@endpush
