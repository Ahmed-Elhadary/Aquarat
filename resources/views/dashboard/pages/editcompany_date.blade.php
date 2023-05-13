@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>
                    Edit Company Date
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                  Edit Company Date / <a href="{{ route('company_date.index') }}">Company Dates</a> /
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
                    <i class="pe-7s-date">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('company_date.update',$company_date->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Company Date</label>
                            <input type="date" class="form-control" name="company_date"  value="{{ $company_date->company_date }}" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Title</label>
                            <input type="text" class="form-control" name="ar_title" value="{{ $company_date->ar_title }}" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Title</label>
                            <input type="text" class="form-control" name="en_title"  value="{{ $company_date->en_title }}" placeholder="English name"  >
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details"  placeholder="Arabic Details"  required>{{ $company_date->ar_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details"  placeholder="English Details"  >{{ $company_date->en_details }}</textarea>

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
