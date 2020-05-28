@extends('layouts.master')
@section('title','leave List')
    
@section('content')
<div class="element-wrapper">
  @foreach (['danger','success','info','warning'] as $msg)
      @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
  @endforeach
    <h6 class="element-header">
      leave
    </h6>
    <div class="element-box">
      <h5 class="form-header">
        leave
      </h5>
      <div class="form-desc">
        {{--  --}}
      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>Emplpyee Name</th>
              <th>From</th>
              <th>To</th>
              <th>Total</th>
              <th>Remaining</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Emplpyee Name</th>
              <th>From</th>
              <th>To</th>
              <th>Total</th>
              <th>Remaining</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($leaves as $leave)
              <tr>
                <td>{{ $leave->employee->name }}</td>
                <td>{{ $leave->from_date }}</td>
                <td>{{ $leave->to_date }}</td>
                <td>{{ abs(strtotime($leave->from_date) - strtotime($leave->to_date))/60/60/24 }}</td>
                <td>
                  @if ((abs(strtotime(date("Y-m-d")) - strtotime($leave->to_date))/60/60/24) > (abs(strtotime($leave->from_date) - strtotime($leave->to_date))/60/60/24))
                      Start Not yet
                  @elseif(strtotime($leave->to_date) < strtotime(date("Y-m-d")))
                      Leave time expired
                  @else
                  {{ abs(strtotime(date("Y-m-d")) - strtotime($leave->to_date))/60/60/24 }}

                  @endif
                  
                  </td>
                <td>{{ $leave->status == "0" ? "Pending" : "Approved" }}</td>
                <td>
                  <a href="{{ route('leave.approve',$leave->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                  <a href="{{ route('decline_leave',$leave->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('leave.show',$leave->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    {{-- <a href="{{ route('employee.destroy',$employee->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> --}}
                    
                    <form action="{{ route('leave.destroy',$leave->id) }}" method="POST">
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
