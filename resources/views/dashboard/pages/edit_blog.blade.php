@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Add offer
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Add Offer / <a href="{{ route('blogs.index') }}">Offers</a> /
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
                    <i class="pe-7s-photo">
                    </i>
                </div>
                <form class="needs-validation " novalidate action="{{route('blogs.update',$blog->id)}}" method="post"  enctype="multipart/form-data">
                    @csrf
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Title</label>
                            <input type="text" class="form-control" name="ar_title" value="{{ $blog->ar_title }}" placeholder="Arabic Title"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Description</label>
                            <textarea type="text" class="form-control ckeditor" id="ar_description" name="ar_description" maxlength="180"  placeholder="Arabic Description"  required>{{ $blog->ar_description }}</textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            maximum length of 180 characters
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationImage">Image</label>
                            <div class="input-group">
                                <input type="file" name="image" class="form-control" id="validationImage" placeholder="Image" aria-describedby="inputGroupPrepend">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-warning" type="submit" style="width: 150px">Upadte</button>
                    @method('PUT')
                </form>
            </div>
        </div>

    </div>
@endsection
@push('custom-scripts')
{{--  <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>  --}}
<script>
    ClassicEditor.create( document.querySelector( '#ar_description' ) )
        .catch( error => {
            console.error( error );
        } );


</script>
@endpush
