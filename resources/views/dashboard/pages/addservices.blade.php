@extends('dashboard.layouts.serviceApp')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Add Services
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Add Services / <a href="{{ route('services.index') }}">Services</a> /
                       <a href="{{ route('dashboard.index') }}">Home</a>
                </div>
            </div>
        </div>
    </div>

      </div>
</div>
 <div class="app-main__inner">

          <div class="main-card mb-3 card ">
            <div class="card-body">
                <div class="page-title-icon">
                    <i class="pe-7s-tools">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('services.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Service</label>
                            <input type="text" class="form-control" name="ar_name" placeholder="English name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Service</label>
                            <input type="text" class="form-control" name="en_name" placeholder="English name"  >
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details" maxlength="180"  placeholder="Arabic Details"  required></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            maximum length of 180 characters
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details" maxlength="180"  placeholder="English Details"  ></textarea>
                            maximum length of 180 characters

                        </div>


                    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
                    <link href="{{ asset('dashboard/font-picker/css/icon-picker.min.css') }}" media="all" rel="stylesheet" type="text/css" />
                    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
                    <script src=" {{ asset('dashboard/font-picker/js/iconPicker.min.js') }}"></script>
                    <script type="text/javascript">
                        $(function () {
                            $(".icon-picker").iconPicker();
                        });
                    </script>

                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02">Choose Icon</label>
                        <input type="text" name="icon" class="icon-picker readonly-icon"  required/>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    </div>
                    <button class="btn btn-warning" type="submit">Add New</button>
                </form>
            </div>
        </div>

    </div>
@endsection
@push('custom-scripts')

<script>
      $(".readonly-icon").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });

</script>

@endpush
