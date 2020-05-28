@extends('layouts.master')
@section('title','notice Cotegory')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      notice
    </h6>
    <div class="element-box">
        <h3>{{ $notice->title }}</h3>
        <p>{{ $notice->noticeBody }}</p>
        @if($notice->weblink)
            <a href="{{ $notice->weblink }}" target="_blank">{{ $notice->weblink }}</a>
        @endif

        <h4>{{ $notice->noticeFor == 1 ? "For All" : ucfirst($notice->noticeFor) }}</h4>

        @if ($notice->file)
            <a href="{{'/storage/'.$notice->file}}" target="_blank">Attachment</a>
        @endif
        {{-- <h2>SKILL</h2>
        <ul>
            @foreach ($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul> --}}

    <p class="{{ $notice->status == 1 ? "text-success" : "text-danger" }}">{{ $notice->status == 1 ? "Active" : "Deactice"}}</p>
        
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
