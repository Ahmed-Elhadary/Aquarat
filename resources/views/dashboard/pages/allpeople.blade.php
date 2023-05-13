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
              <h3 class="card-title">All People</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-warning btn-add-items" href="{{ route('people.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Action</th>
                    <th>Arabic Name</th>
                    <th>English Name</th>
                    <th class="hiddenCols" >Arabic Details</th>
                    <th  class="hiddenCols" >English Details</th>
                    <th>Arabic Job Title</th>
                    <th>English Job Title</th>
                    <th  class="hiddenCols">Facebook</th>
                    <th  class="hiddenCols">Instagram</th>
                    <th  class="hiddenCols">Twitter</th>
                    <th  class="hiddenCols">Linkedin</th>
                    <th  class="hiddenCols">Gmail</th>
                    <th  class="hiddenCols">Image</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach($peoples as $people)
                    <tr>
                        <td>
                            <form action="{{route('people.destroy',$people)}}" method="post" >
                                @csrf
                                @method('delete')
                      <button  class="delete_ancor btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                            </form>

                      <a  href="{{route('people.edit',$people->id)}}" class="edit_ancor btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </a>

                           </td>
                        <td>{{ $people->ar_name }}</td>
                        <td>{{ $people->en_name }}</td>
                        <td>{{ $people->ar_details }}</td>
                        <td>{{ $people->en_details }}</td>
                        <td>{{ $people->ar_job_title }}</td>
                        <td>{{ $people->en_job_title }}</td>
                        <td>{{ $people->facebook }}</td>
                        <td>{{ $people->instagram }}</td>
                        <td>{{ $people->twitter }}</td>
                        <td>{{ $people->linkedin }}</td>
                        <td>{{ $people->gmail }}</td>
                        <td>
                            <img src={{ asset('images/people/'. $people->image)}} width="70px" height="70px">
                        </td>



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
    <!-- /.container-fluid -->
  </section>

@endsection
@push('custom-scripts')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
        "buttons": ["copy", "csv", "excel", "print", "colvis"],
        columnDefs: [
                        {
                        targets: "hiddenCols", visible: false
                    }
                    ],
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    </script>
@endpush
