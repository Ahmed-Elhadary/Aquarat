@extends('dashboard.layouts.app')
@section('content')
<br><br>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Admins</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
                @if (Auth::user()->isAdmin == 1)
            <a class="btn btn-warning btn-add-items " href="{{ route('admin.create') }}">Add New</a>
            @endif
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th> Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    @if (Auth::user()->isAdmin == 1)
                      <th>Action</th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                    <tr>

                        <td>
                            @if ($admin->image)
                            <img  class="admin-users" src="{{ asset('images/Users/'.$admin->image) }}">
                            @else
                            <img  class="admin-users" src="{{ asset('images/profile.jpg') }}">
                            @endif


                        </td>
                        <td>{{ $admin->name }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>
                            @if( $admin->isAdmin == 1)
                                Admin
                            @else
                                User
                            @endif
                        </td>
                        @if (Auth::user()->isAdmin == 1)
                       <td>
                           @if (Auth::user()->id != $admin->id)
                                <form action="{{route('admin.destroy',$admin)}}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <button  class="delete_ancor btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>

                           @endif

                  <a  href="{{route('admin.edit',$admin->id)}}" class="edit_ancor btn btn-warning">
                    <i class="fa fa-edit"></i>
                  </a>

                       </td>
                        @endif
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
</div>
</div>
    <!-- /.container-fluid -->
  </section>

@endsection
@push('custom-scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
@endpush
