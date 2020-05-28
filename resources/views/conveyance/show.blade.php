@extends('layouts.master')
@section('title','Conveynce')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Conveynce
    </h6>
    <div class="element-box">
        <h3>{{ $conveyance->employee->name }}</h3>
        <p>Subject : {{ $conveyance->subject }}</p>
        <p>From : {{ $conveyance->from }}</p>
        <p>To : {{ $conveyance->to }}</p>
        <p>Transport : {{ $conveyance->transport }}</p>
        <p>amount : {{ $conveyance->amount }}</p>
        <p>fromLat : {{ $conveyance->fromLat }}</p>
        <p>toLong : {{ $conveyance->toLong }}</p>
        <p>distance : {{ $conveyance->distance }}</p>
        <p>billDate : {{ $conveyance->billDate }}</p>
        
        {{-- <h2>SKILL</h2>
        <ul>
            @foreach ($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul> --}}
     

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
