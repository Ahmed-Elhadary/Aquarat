@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Edit Product
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Edit Product / <a href="{{ route('products.index') }}">Products</a> /
                       <a href="{{ route('dashboard.index') }}">Home</a>
                </div>
            </div>
        </div>
    </div>

      </div>
</div>
 <div class="app-main__inner">

          <div class="main-card mb-3 card ">
            <div class="page-title-icon">
                <i class="pe-7s-box1">
                </i>
            </div>
            <div class="card-body">
                <form class="needs-validation " novalidate action="{{route('products.update',$products->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="form-group col-12">
                            <label for="category_name">Main Category</label>
                            <select id='product_main_category_selected' name="main_category_id" class="form-control " required>
                                   @foreach($mainCategories as $mainCategory)
                                        <option value='{{$mainCategory->id}}'
                                            {{ $products->main_category_id == $mainCategory->id ? 'selected' : '' }}>{{$mainCategory->ar_name}}</option>
                                    @endforeach
                                </select>
                          </div>

                          <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name" value="{{ $products->ar_name }}"  placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Name</label>
                            <input type="text" class="form-control" name="en_name" value="{{ $products->en_name }}" placeholder="English name"  >
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details"  id="ar_details"  placeholder="Arabic details"  required>   {{ $products->ar_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details" id="en_details"  placeholder="English details"  >{{ $products->en_details }}</textarea>

                        </div>
                        <div class="col-md-12 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" >
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
                        </div>
                    </div>
                    {{method_field('PUT')}}
                    <button class="btn btn-primary" type="submit">Edit Product</button>
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

    </script>

    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create( document.querySelector( '#ar_details' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor.create( document.querySelector( '#en_details' ) )
            .catch( error => {
                console.error( error );
            } );

    </script>

@endpush
