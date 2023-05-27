@extends('dashboard.layouts.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="page-title-heading">
                            <div>Add Category
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="page-links-heading">
                            Add Category / <a href="{{ route('maincategory.index') }}">Categories</a> /
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
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-diamond">
                        </i>
                    </div>

                </div>
                <form class="needs-validation " novalidate action="{{ route('maincategory.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        {{--  <div class="form-group col-12">
                            <label for="category_name"> Company *</label>
                            <select id='company_selected' name="company_id" class="form-control "
                                required>
                                <option></option>
                                @foreach ($companies as $company)
                                    <option value='{{ $company->id }}'>{{ $company->ar_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="category_name"> Category *</label>
                            <select id='product_main_category_selected' name="main_category_id" class="form-control "
                                >
                                <option></option>
                                @foreach ($categories as $category)
                                    <option value='{{ $category->id }}'>{{ $category->ar_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>English Name</label>
                            <input type="text" class="form-control" name="en_name" placeholder="English name">
                        </div>  --}}
                        <div class="col-md-12 mb-3">
                            <label>Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name" placeholder="Arabic name" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Image</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image" id="inputGroupFile02"
                                        required>
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
        $('#product_main_category_selected').select2();
        $('#product_main_category_selected').select2({
            placeholder: 'Select  Category',
        });
        $('#company_selected').select2();
        $('#company_selected').select2({
            placeholder: 'Select  Company',
        });



    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#ar_details'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor.create(document.querySelector('#en_details'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
