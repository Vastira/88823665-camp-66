@extends('layouts.default')

@section('content')
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <h1 class="mt-5 text-center">User Tables</h1></div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-6 mx-auto">
                <div class="card mb-4">
                  <!-- /.card-header -->
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
                  </div>
                  <!-- /.card-body -->
                </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
    </div>
    <!--end::App Wrapper-->
  </body>
  <!--end::Body-->
@endsection 