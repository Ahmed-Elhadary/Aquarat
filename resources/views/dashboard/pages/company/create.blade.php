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
                <form class="needs-validation " novalidate action="{{route('companies.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" required>
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                       </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Name</label>
                            <input type="text" class="form-control" name="en_name" placeholder="English name"  >
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02">Arabic Details</label>
                        <textarea type="text" class="form-control" name="ar_details" placeholder="Arabic Details"  required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationCustom02">English Details</label>
                        <textarea type="text" class="form-control" name="en_details"  placeholder="English Details"  required></textarea>
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
