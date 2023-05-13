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
              <h3 class="card-title">All About Company</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="150px">Action</th>
                    <th>Image</th>
                    <th>Years</th>
                    <th>Arabic Company Name</th>
                    <th>English Company Name</th>
                    <th class="hiddenCols">English Details</th>
                    <th class="hiddenCols">Arabic Details</th>

                  </tr>
                </thead>
                <tbody>

                    @foreach($about_company as $company)
                    <tr>
                        <td>
                          
                      <a  href="{{route('aboutcompany.edit',$company->id)}}" class="edit_ancor btn btn-warning">
                        <i class="fa fa-edit"></i>
                      </a>
                           </td>
                         <td>
                            <img src={{ asset('images/About/'.$company->image)}} width="70px" height="70px">
                        </td>
                        <td>{{ $company->years }}</td>

                        <td>{{ $company->ar_company_name }}</td>
                        <td>{{ $company->en_company_name }}</td>
                        <td >{{ $company->en_details}}</td>
                        <td>{{ $company->ar_details}}</td>



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
