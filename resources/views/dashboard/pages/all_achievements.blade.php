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
              <h3 class="card-title">All Achievements</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">

            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Since</th>
                    <th>Clients </th>
                    <th>Employees </th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($rates as $rate)
                    <tr>
                        <td>{{ $rate->since }}</td>
                        <td>{{ $rate->clients }}</td>
                        <td>{{ $rate->employee }}</td>

                       <td>
                      

                  <a  href="{{route('achievements.edit',$rate->id)}}" class="edit_ancor btn btn-warning">
                    <i class="fa fa-edit"></i>
                  </a>

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
</div>
</div>
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
