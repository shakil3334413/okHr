@extends('layouts.master')
@section('title','Companies')
    
@section('content')
<div class="element-wrapper">
    <h6 class="element-header">
      Company
    </h6>
    <div class="element-box">
      <h5 class="form-header">
        Company
        <a href="{{ route('companies.create') }}" class="btn btn-success">Add new</a>
      </h5>
      <div class="form-desc">
        {{--  --}}
      </div>
      <div class="table-responsive">
        <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
          <thead>
            <tr>
              <th>SL</th>
              <th>Company Name</th>
              <th>Company Logo</th>
              <th>Company Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
                <th>SL</th>
                <th>Company Name</th>
                <th>Company Logo</th>
                <th>Company Email</th>
                <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
              @foreach ($companies as $key=>$company)
              <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $company->companyName }}</td>
                <td><img style="height:120px;width:200px;" src="{{ asset( 'storage/' .$company->companyLogo) }}" alt=""></td>
                <td>{{ $company->companyEmail }}</td>
                <td>
                    <a href="{{ route('companies.show',$company->id) }}" class="btn btn-info"><i class="fa fa-trash"></i></a>
                   <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
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
