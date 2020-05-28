@extends('layouts.master')
@section('title','Job Cotegory')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Job
    </h6>
    <div class="element-box">
        <h3>{{ $jobapplication->jobCategory }}</h3>
        <p>Name :{{ $jobapplication->candidateName }}</p>
        <p>E-mail :{{ $jobapplication->candidateEmail }}</p>
        <p>Phone :{{ $jobapplication->candidatePhone }}</p>
        <img style="height:100px;width:90px;" src="{{'/storage/'.$jobapplication->image}}" alt="" srcset="">
        <br><br>
        <a href="{{'/storage/'.$jobapplication->resume}}" target="_blank" class="btn btn-info">Show resume</a>
        <h4>Cover Letter</h4>
        <p class="para">{{ $jobapplication->coverLetter }}</p>
        
        
        <p>Submit Date : {{ $jobapplication->created_at }}</p>
        
 
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
