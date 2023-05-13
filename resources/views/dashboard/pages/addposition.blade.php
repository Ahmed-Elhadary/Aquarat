@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>
                      Add Position
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                    Add Position / <a href="{{ route('positions.index') }}">Positions</a> /
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
                    <i class="pe-7s-network">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('positions.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Title</label>
                            <input type="text" class="form-control" name="ar_title" placeholder="Arabic Title" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Title</label>
                            <input type="text" class="form-control" name="en_title" placeholder="English Title" >

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
