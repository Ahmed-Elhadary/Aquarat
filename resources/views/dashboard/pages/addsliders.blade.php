@extends('dashboard.layouts.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="page-title-heading">
                            <div>Add Slider
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="page-links-heading">
                            Add Slider / <a href="{{ route('sliders.index') }}">Sliders</a> /
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
                <form class="needs-validation " novalidate action="{{ route('sliders.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="slider" class="ml-2 mr-2">video</label>
                        <input type="radio" id="video" name="type" value="0" >
                        <label for="slider" class="ml-2 mr-2">image</label>
                        <input type="radio" id="image" name="type" value="1" checked>
                    </div>
                    <div class="form-row ">
                        <div class="col-md-12 mb-3 image">
                            <label>Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3 video d-none">
                            <label>Video *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="video">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Arabic Description *</label>
                            <textarea type="text" class="form-control" name="ar_description" maxlength="200" placeholder="Arabic Discription"
                                required></textarea>
                            maximum length of 200 characters
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>English Description</label>
                            <textarea type="text" class="form-control" name="en_description" maxlength="200" placeholder="English Discription"></textarea>
                            maximum length of 200 characters
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
        $('input[name="type"]').on('click', function() {
            var type = $("input[name='type']:checked").val();
            console.log(type);
            if (type != '') {
                if (type == 0) {
                    $('.video').removeClass('d-none');
                    $('.image').addClass('d-none');

                } else if (type == 1) {
                    $('.image').removeClass('d-none');
                    $('.video').addClass('d-none');
                }

            }
        });
    </script>
@endpush
