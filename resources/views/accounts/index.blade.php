@extends('layouts.master')
@section('title','Accounts List')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Accounts
    </h6>
    <div class="element-box">
      <h5 class="form-header">
        Accounts
      </h5>
      <div class="form-desc">
        {{--  --}}
      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Basic Salary</th>
              <th>Fastival Bonus</th>
              <th>Overtime</th>
              <th>Incriment</th>
              <th>Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>Employee</th>
                <th>Basic Salary</th>
                <th>Fastival Bonus</th>
                <th>Overtime</th>
                <th>Incriment</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($accounts as $account)
              <tr>
                <td><a href="{{ route('employee.show',$account->employee_id) }}">{{ $account->employee->name }}</a></td>
                <td>{{ $account->basic_salary }}</td>
                <td>{{ $account->festival_bonus }}</td>
                <td>{{ $account->overtime_scope ? "Yes" : "No" }}</td>
                <td>{{ $account->incriment_type}}</td>
                @php
                if($account->gross_salary == false){
                  $basic = $account->basic_salary;
                  $medical = $account->basic_salary * ($account->medical / 100);
                  $house = $account->basic_salary * ($account->house_rent / 100);
                  $total = $basic + $medical + $house;
                }else{
                  $total = $account->basic_salary;
                }
                    
                @endphp
                <td>{{ $total}}</td>
                <td>
                    <a href="{{ route('accounts.show',$account->id) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                    
                    <form action="{{ route('accounts.destroy',$account->id) }}" method="POST">
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
