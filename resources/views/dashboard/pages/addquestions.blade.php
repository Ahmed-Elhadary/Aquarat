@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Add Question
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Add Question / <a href="{{ route('questions.index') }}">Questions</a> /
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
                    <i class="pe-7s-help1">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('questions.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Question *</label>
                            <input type="text" class="form-control" name="ar_question" placeholder="Arabic Question"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Question</label>
                            <input type="text" class="form-control" name="en_question" placeholder="English Question"  >
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Answer *</label>
                            <textarea type="text" class="form-control" name="ar_answer" id="ar_answer"  placeholder="Arabic Answer"  required></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">English Answer</label>
                            <textarea type="text" class="form-control" name="en_answer" id="en_answer"  placeholder="English Answer"  ></textarea>

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

<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create( document.querySelector( '#ar_answer' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor.create( document.querySelector( '#en_answer' ) )
        .catch( error => {
            console.error( error );
        } );

</script>

@endpush
