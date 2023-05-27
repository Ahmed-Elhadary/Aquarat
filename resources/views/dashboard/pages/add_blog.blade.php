@extends('dashboard.layouts.app')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="page-title-heading">
                    <div>Add OFFER
                    </div>
                </div>
            </div>
            <div class="col-6 ">
                <div class="page-links-heading">
                      Add OFFER / <a href="{{ route('blogs.index') }}">Offers</a> /
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
                <form class="needs-validation " novalidate action="{{route('blogs.store')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Title</label>
                            <input type="text" class="form-control" name="ar_title" placeholder="Arabic Title"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Arabic Description</label>
                            <textarea type="text" class="form-control" name="ar_description" maxlength="180"  placeholder="Arabic Description"  required></textarea>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            maximum length of 180 characters
                        </div>
                            <div class="col-md-12 mb-3 image">
                                <label>Image *</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                </div>
                            </div>
                    <button class="btn btn-warning" type="submit">Add New</button>
                </form>
            </div>
        </div>

    </div>
@endsection
@push('custom-scripts')

<script>
      $(".readonly-icon").on('keydown paste focus mousedown', function(e){
        if(e.keyCode != 9) // ignore tab
            e.preventDefault();
    });

</script>
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

