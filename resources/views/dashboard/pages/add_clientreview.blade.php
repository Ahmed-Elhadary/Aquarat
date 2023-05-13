@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Add Client Review
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Add Client Review / <a href="{{ route('clientreview.index') }}">Reviews</a> /
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
                    <i class="pe-7s-comment">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('clientreview.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">

                        <div class="col-md-6 mb-3">
                            <label >Arabic  Name </label>
                            <input type="text" class="form-control" name="ar_name" placeholder="Arabic Name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >English Name </label>
                            <input type="text" class="form-control" name="en_name" placeholder="English Name"  >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Arabic Job </label>
                            <input type="text" class="form-control" name="ar_job" placeholder="Arabic Job "  required >
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label >English Job </label>
                            <input type="text" class="form-control" name="en_job" placeholder="English Job"  >
                        </div>

                      <div class="col-md-12 mb-3">
                            <label > Arabic Message</label>
                            <textarea type="text" class="form-control" name="ar_message" maxlength="165" placeholder="Arabic Message"  required></textarea>
                            maximum length of 165 characters
                        </div>

                        <div class="col-md-12 mb-3">
                            <label > English Message</label>
                            <textarea type="text" class="form-control" name="en_message" maxlength="165" placeholder="English Message"  ></textarea>
                            maximum length of 165 characters
                        </div>

                        <div class="col-md-12 mb-3">
                            <label >Image </label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" >
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
