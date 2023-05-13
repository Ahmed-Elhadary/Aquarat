@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>
                    Edit People
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                  Edit People / <a href="{{ route('people.index') }}">People</a> /
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
                <form class="needs-validation " novalidate action="{{route('people.update',$peoples->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">

                        <div class="form-group col-12">
                            <label for="category_name">Position</label>
                            <select id='position_selected' name="position_id" class="form-control " required>
                                   @foreach($positions as $position)
                                        <option value='{{$position->id}}'
                                            {{ $peoples->position_id == $position->id ? 'selected' : '' }}>{{$position->ar_title}}</option>
                                    @endforeach
                                </select>
                          </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Arabic Name</label>
                            <input type="text" class="form-control" name="ar_name" value="{{ $peoples->ar_name }}"  placeholder="Arabic name"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">English Name</label>
                            <input type="text" class="form-control" value="{{ $peoples->en_name }}" name="en_name" placeholder="English name"  >
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Arabic Job Titles</label>
                            <input type="text" class="form-control" name="ar_job_title"  placeholder="Arabic Job Titles" value="{{ $peoples->ar_job_title }}" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">English Job Titles</label>
                            <input type="text" class="form-control" name="en_job_title"   placeholder="English Job Titles" value="{{ $peoples->en_job_title }}" >

                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Details</label>
                            <textarea type="text" class="form-control" name="ar_details"   placeholder="Arabic details"  required>{{ $peoples->ar_details }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Details</label>
                            <textarea type="text" class="form-control" name="en_details"  placeholder="English details"  >{{ $peoples->en_details }}</textarea>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Facebook</label>
                            <input type="url" class="form-control" name="facebook" value="{{ $peoples->facebook }}"  placeholder="Facebook"  >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Twitter</label>
                            <input type="url" class="form-control" name="twitter" value="{{ $peoples->twitter }}"  placeholder="Instagram"  >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Instagram</label>
                            <input type="url" class="form-control" name="instagram" value="{{ $peoples->instagram }}"  placeholder="Instagram"  >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Gmail</label>
                            <input type="url" class="form-control" name="gmail" value="{{ $peoples->gmail }}"  placeholder="Gmail"  >

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Linkedin</label>
                            <input type="url" class="form-control" name="linkedin" value="{{ $peoples->linkedin }}"  placeholder="Linkedin"  >

                        </div>
                        <div class="col-md-6 mb-3">
                            <label >Image *</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" name="image" id="inputGroupFile02" >
                                  <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                              </div>
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

    <script>
        $('#position_selected').select2();
        $('#position_selected').select2({
            placeholder: 'Select  Category',
          });

        </script>
@endpush
