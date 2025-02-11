@extends('layouts.default')

@section('content')
<div class="container-fluid">
  <div class="row">
    <h1 class="mt-5 text-center">User Tables</h1></div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card mb-4">
          <div class="card-body">
            <table class="table table-bordered" >
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th style="width: 200px">Name</th>
                  <th style="width: 200px">Email</th>
                  <th style="width: 140px"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($users as $index => $user) { ?>
                  <tr class="align-middle">
                    <td>{{ $index+1 }}.</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <a href="{{url('/user/'.$user->id)}}">
                        <button class="btn btn-warning">Edit</button>
                      </a>
                      <form action="{{url('/user')}}" method="post" style="display: inline;">
                      @csrf
                      @method('delete')
                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            {{-- <button class="btn" onclick="confirmDelete()">Click Me</button> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection 

@section('scripts')
  <script>
    function confirmDelete(){
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-success",
          cancelButton: "btn btn-danger"
        },
        buttonsStyling: false
      });
      swalWithBootstrapButtons.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
      }).then((result) => {
        if (result.isConfirmed) {
          swalWithBootstrapButtons.fire({
            title: "Deleted!",
            text: "This user has been deleted.",
            icon: "success"
          });
        } else if (
          /* Read more about handling dismissals below */
          result.dismiss === Swal.DismissReason.cancel
        ) {
          swalWithBootstrapButtons.fire({
            title: "Cancelled",
            text: "You've cancelled deleting user.",
            icon: "error"
          });
        }
      });
    }  
  </script>
@endsection  