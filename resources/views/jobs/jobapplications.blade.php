@extends('layouts.master')
@section('title','Job Cotegory')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Jobs
    </h6>
    <div class="element-box">
      <h5 class="form-header">
        Jobs
        <a href="{{ route('createJobCategories') }}" class="btn btn-success">Add new</a>
      </h5>
      <div class="form-desc">
        {{--  --}}
      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>SL</th>
              <th>Job Category</th>
              <th>Title</th>
              <th>Start Date</th>
              <th>End Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>SL</th>
                <th>Job Category</th>
                <th>Candidate Name</th>
                <th>Image</th>
                <th>Resume</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($jobapplications as $key=>$application)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $application->jobCategory }}</td>
                <td>{{ $application->candidateName }}</td>
                <td><img style="height:35px;width:35px;" src="{{ 'storage/'.$application->image }}" alt="" srcset=""></td>
                <td><a href="{{ 'storage/'.$application->resume }}" target="_blank" class="btn btn-info">View Resume</a></td>
                <td>
                    <a href="{{ route('jobapplication.show',$application->id) }}" class="btn btn-info btn-sm">show</a>
                   <form action="{{ route('jobapplication.delete',$application->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button> 
                  </form>

                </td>
              </tr>
              @endforeach
    
    </tbody>
  </table>
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
