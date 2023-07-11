@extends('dashboard.layouts.serviceApp')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Company Services
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Company Services / <a href="{{ route('companyservice.index') }}">Company Services</a> /
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
                <form class="needs-validation " novalidate action="{{route('companyservice.update',$companyservice->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name" value="{{ $companyservice->ar_name}}" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                       </div>

                        {{--  <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details" maxlength="65" placeholder="Arabic Details"  required>{{ $companyservice->ar_details}}</textarea>
                            maximum length of 65 characters
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>  --}}
                        <input type="hidden" name="ar_details" value="{{ $companyservice->ar_details }}">

                        <div class="col-md-12 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" required>
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
                        </div>
                        {{--  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">  --}}
                        {{--  <link href="{{ asset('dashboard/font-picker/css/icon-picker.min.css') }}" media="all" rel="stylesheet" type="text/css" />  --}}
                        <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
                        {{--  <script src=" {{ asset('dashboard/font-picker/js/iconPicker.min.js') }}"></script>  --}}

                    </div>
                    {{method_field('PUT')}}
                    <button class="btn btn-warning" type="submit">Update</button>
                </form>

                <script>
                    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            var forms = document.getElementsByClassName('needs-validation');
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>

    </div>
@endsection
@push('custom-scripts')

@endpush

