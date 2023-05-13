
@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Achievement
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Achievement / <a href="{{ route('achievements.index') }}">Company Achievements</a> /
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
                    <i class="pe-7s-rocket">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('achievements.update',$rates->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Clients Count </label>
                            <input type="number" class="form-control" value="{{ $rates->clients }}" name="clients" placeholder="clients Count" required >
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02"> Since its inception</label>
                            <input type="number" class="form-control" value="{{ $rates->since }}" name="since" placeholder="experts Count"  required>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Employees Count </label>
                            <input type="number" class="form-control" value="{{ $rates->employee }}" name="employee" placeholder="employee"  required>
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

