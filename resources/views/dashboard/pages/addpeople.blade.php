@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>
                    Add People
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                  Add People / <a href="{{ route('people.index') }}">People</a> /
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
                    <i class="pe-7s-user">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('people.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="form-group col-12">
                            <label for="category_name">Position</label>
                            <select id='position_selected' name="position_id" class="form-control " required>
                                    <option></option>
                                   @foreach($peoples as $people)
                                        <option value='{{$people->id}}' >{{$people->ar_title}}</option>
                                    @endforeach
                                </select>
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name" placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">English Name</label>
                            <input type="text" class="form-control" name="en_name"id="validationCustom02" placeholder="English name"  >
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Arabic Job Titles</label>
                            <input type="text" class="form-control" name="ar_job_title" placeholder="Arabic Job Title"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">English Job Titles</label>
                            <input type="text" class="form-control" name="en_job_title" placeholder="English Job Title"  >

                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details" placeholder="Arabic details"  required></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details" placeholder="English details"  ></textarea>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Facebook</label>
                            <input type="url" class="form-control" name="facebook" placeholder="Facebook"  >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Twitter</label>
                            <input type="url" class="form-control" name="twitter" placeholder="Instagram"  >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Instagram</label>
                            <input type="url" class="form-control" name="instagram" placeholder="Instagram"  >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Gmail</label>
                            <input type="url" class="form-control" name="gmail" placeholder="Gmail"  >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Linkedin</label>
                            <input type="url" class="form-control" name="linkedin" placeholder="Linkedin"  >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" required>
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
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
@push('custom-scripts')

    <script>
        $('#position_selected').select2();
        $('#position_selected').select2({
            placeholder: 'Select  Category',
          });

        </script>
        @endpush



