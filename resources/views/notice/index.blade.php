@extends('layouts.master')
@section('title','Employee List')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Employee
    </h6>
    <div class="element-box">
      <h5 class="form-header">
        Employee
      </h5>
      <div class="form-desc">

      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>SL</th>
              <th>Title</th>
              <th>Notice for</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Notice for</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($notices as $key=>$notice)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ substr($notice->title, 0,20) }}</td>
                <td>{{ $notice->noticeFor == 1 ? "For All" : ucfirst($notice->noticeFor) }}</td>
               
                <td>
                    <a href="{{ route('notice.edit',$notice->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('notice.show',$notice->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    {{-- <a href="{{ route('employee.destroy',$employee->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                    
                    <form action="{{ route('notice.destroy',$notice->id) }}" method="POST">
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
