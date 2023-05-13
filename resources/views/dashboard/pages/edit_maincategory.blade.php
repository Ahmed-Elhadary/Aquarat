@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Category
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Category / <a href="{{ route('maincategory.index') }}">Categories</a> /
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
                    <i class="pe-7s-diamond">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('maincategory.update',$maincategory->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="form-group col-12">
                            <label for="category_name"> Company *</label>
                            <select id='company_selected' name="company_id" class="form-control "
                                required>
                                <option></option>
                                @foreach ($companies as $company)
                                    <option value='{{ $company->id }}' {{ $company->id == $maincategory->company_id ? 'selected':'' }}>{{ $company->ar_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="category_name"> Category *</label>
                            <select id='product_main_category_selected' name="main_category_id" class="form-control "
                                >
                                <option></option>
                                @foreach ($categories as $category)
                                    <option value='{{ $category->id  ?? ' '}}'>{{ $category->ar_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >English Name</label>
                            <input type="text" class="form-control" name="en_name" placeholder="English name" value="{{ $category->en_name }}" >
                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name"  placeholder="Arabic name" value="{{ $category->ar_name }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationImage">Image</label>
                            <div class="input-group">
                                <input type="file" name="image" class="form-control" id="validationImage" placeholder="Image" aria-describedby="inputGroupPrepend" value="{{ $category->image }}" >

                            </div>
                        </div>
                    </div>
                    {{method_field('PUT')}}
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
