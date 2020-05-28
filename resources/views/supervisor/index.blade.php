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
        {{--  --}}
      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>Name</th>
              <th>Office Mail</th>
              <th>Phone</th>
              <th>Department</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Name</th>
                <th>Office Mail</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($supervisors as $supervisor)
              <tr>
                <td>{{ $supervisor->name }}</td>
                <td>{{ $supervisor->officeEmail }}</td>
                <td>{{ $supervisor->phone }}</td>
                <td>{{ $supervisor->department}}</td>
                <td>
                    <a href="{{ route('supervisor.edit',$supervisor->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('supervisor.show',$supervisor->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    {{-- <a href="{{ route('employee.destroy',$employee->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                    
                    <form action="{{ route('supervisor.destroy',$supervisor->id) }}" method="POST">
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
