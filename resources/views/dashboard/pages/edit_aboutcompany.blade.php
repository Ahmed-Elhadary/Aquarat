@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>
                    Edit About Company
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                  Edit About Company / <a href="{{ route('aboutcompany.index') }}"> Company Details </a> /
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
                    <i class="pe-7s-id">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('aboutcompany.update',$about_company->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">


                             <div class="col-md-12 mb-3">
                            <label for="validationCustom02"> Number of Years</label>
                            <input type="text" class="form-control" name="years"  value="{{ $about_company->years }}"  placeholder="Years Number"  required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Company Name</label>
                            <input type="text" class="form-control" name="ar_company_name" value="{{ $about_company->ar_company_name }}"  placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Company Name</label>
                            <input type="text" class="form-control" name="en_company_name" value="{{ $about_company->en_company_name }}"  placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details" placeholder="Arabic Details"  required>{{ $about_company->ar_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details"  placeholder="English Details"  required>{{ $about_company->en_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" >
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
                        </div>
                    </div>
                    @method('put')
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
