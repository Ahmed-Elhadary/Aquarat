
@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Contact info
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Contact info / <a href="{{ route('contactInfo.index') }}"> Contact Info</a> /
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
                    <i class="pe-7s-call">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('contactInfo.update',$contactInfo->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Emails * </label>
                            <textarea  class="form-control"  name="email" id="email" placeholder="Email" required >{{ $contactInfo->email }}</textarea>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Phones * </label>
                            <textarea  class="form-control"  name="phone" id="phone" placeholder="Phone"  required>{{ $contactInfo->phone }}</textarea>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Address *</label>
                            <textarea  class="form-control" name="ar_address" id="ar_address" placeholder=" Arabic Address"  required>{{ $contactInfo->ar_address }}</textarea>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Address *</label>
                            <textarea  class="form-control" name="en_address" id="en_address" placeholder=" English Address"  required>{{ $contactInfo->en_address }}</textarea>
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

@push('custom-scripts')


    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#phone' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor.create( document.querySelector( '#email' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor.create( document.querySelector( '#ar_address' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor.create( document.querySelector( '#en_address' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>

@endpush
