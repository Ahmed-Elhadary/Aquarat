@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Add Company
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Add Company / <a href="{{ route('companies.index') }}">Companies</a> /
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
                    <i class="pe-7s-photo-gallery">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('companies.update',$company->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-ro">
                        <div class="form-group text-center">
                            <label class="" for="date_from"> Company Image</label>
                            @if ($company->image)
                                <a href="{{ asset('images/company/' . $company->image) }}" target="_blank">
                                    <img src="{{ asset('images/company/' . $company->image) }}" alt=""
                                        style="width: 90px;
                                    border: 1px solid #DDD;
                                    object-fit: contain;
                                    margin-bottom: 7px;height: 90px;">
                                </a>
                            @endif
                            <div class="col-md-12 mb-3">
                                {{--  <label >Image *</label>  --}}
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" >
                                      <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Name</label>
                            <input type="text" class="form-control" value="{{ $company->ar_name }}" name="ar_name" placeholder="Arabic name"  >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                       </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Name</label>
                            <input type="text" class="form-control" value="{{ $company->en_name }}" name="en_name" placeholder="English name"  >
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details" placeholder="Arabic Details"  required>{{ $company->ar_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details"  placeholder="English Details"  required>{{ $company->en_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="featured"> Status *</label>
                            <select id='company_selected' name="featured" class="form-control "
                                required>
                                <option>select</option>

                                    <option value='1'>Featchured</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-warning" type="submit">Add New</button>
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
