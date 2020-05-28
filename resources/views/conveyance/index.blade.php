@extends('layouts.master')
@section('title','leave List')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      conveyace
    </h6>
    <div class="element-box">
      <h5 class="form-header">
        conveyace
      </h5>
      <div class="form-desc">
        {{--  --}}
      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>Emplpyee Name</th>
              <th>Subject</th>
              <th>Amount</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Emplpyee Name</th>
              <th>Subject</th>
              <th>Amount</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($conveyances as $conveyance)
              <tr>
                <td><a href="">{{ $conveyance->employee->name }}</a></td>
                <td>{{ substr($conveyance->subject,0,30) }}</td>
                <td>{{ $conveyance->amount }}</td>
                
                <td>{{ $conveyance->status == "0" ? "Pending" : "Approved" }}</td>
                <td>
                  <a href="{{ route('conveyance.approve',$conveyance->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="{{ route('decline_conveyance',$conveyance->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="{{ route('conveyance.show',$conveyance->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    {{-- <a href="{{ route('employee.destroy',$employee->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                    
                    <form action="{{ route('conveyance.destroy',$conveyance->id) }}" method="POST">
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
