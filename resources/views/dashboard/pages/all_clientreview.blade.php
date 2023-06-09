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
              <h3 class="card-title">All Clients Reviews</h3>
            </div>
            <!-- /.card-header -->
            <br>
            <div class="col-sm-3">
            <a class="btn btn-warning btn-add-items " href="{{ route('clientreview.create') }}">Add New</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Arabic Name</th>
                    {{--  <th class="hiddenCols">English Name</th>  --}}
                    {{--  <th>Arabic Job</th>  --}}
                    {{--  <th class="hiddenCols">English Job</th>  --}}
                    <th>Arabic Message</th>
                    {{--  <th class="hiddenCols">English Message</th>  --}}
                    <th>Client Image</th>
                    <th width="120px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($reviews as $review)
                        <tr>
                            <td>{{ $review->ar_name }}</td>
                            {{--  <td>{{ $review->en_name }}</td>  --}}
                            {{--  <td>{{ $review->ar_job }}</td>  --}}
                            {{--  <td>{{ $review->en_job }}</td>  --}}
                            <td>{{ $review->ar_message }}</td>
                            {{--  <td>{{ $review->en_message }}</td>  --}}
                            <td><img src="{{asset('images/Reviews/'.$review->image)  }}" alt="" width="70px" > </td>
                            <td>
                                <form action="{{route('clientreview.destroy',$review)}}" method="post" >
                                    @csrf
                                    @method('delete')
                                    <button  class="delete_ancor btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                <a  href="{{route('clientreview.edit',$review->id)}}" class="edit_ancor btn btn-warning">
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
