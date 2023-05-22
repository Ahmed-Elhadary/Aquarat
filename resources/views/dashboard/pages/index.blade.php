@extends('dashboard.layouts.app')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-display2 icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>MS Construction Dashboard
                    <div class="page-title-subheading">
                        Dashboard all over the site ,
                        You can change the content with ease and flexibility.
                    </div>
                </div>
            </div>
            <div class="page-title-actions">


            </div>
        </div>
    </div>

            <div class="row">
                {{-- admins --}}
              <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Admins</h5>
                          <span class="h2 card-number font-weight-bold mb-0">{{ $admins->count() }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fa fa-users-cog"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <a href="{{ route('admin.index') }}" class="text-danger mr-2"> More Details.. </a>
                      </p>
                    </div>
                  </div>
              </div>

              {{-- Team --}}
              {{--  <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Team</h5>
                          <span class="h2 card-number font-weight-bold mb-0">{{ $people->count() }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                            <i class="fa fa-users"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <a href="{{ route('people.index') }}" class="text-warning mr-2"> More Details.. </a>
                      </p>
                    </div>
                  </div>
              </div>  --}}

              {{-- category --}}
              {{--  <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Categories</h5>
                          <span class="h2 card-number font-weight-bold mb-0">{{ $categories->count() }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                            <i class="fa fa-gem"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <a href="{{ route('maincategory.index') }}" class="text-info mr-2"> More Details.. </a>
                      </p>
                    </div>
                  </div>
              </div>  --}}

              {{-- product --}}
              <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Products</h5>
                        <span class="h2 card-number font-weight-bold mb-0">{{ $product->count() }}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                          <i class="fas fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <a href="{{ route('products.index') }}" class="text-success mr-2"> More Details.. </a>
                    </p>
                  </div>
                </div>
              </div>

              {{-- reviews --}}
              {{--  <div class="col-xl-3 col-lg-6 mb-4">
                <div class="card card-stats mb-4 mb-xl-0">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Reviews</h5>
                        <span class="h2 card-number font-weight-bold mb-0">{{ $reviews->count() }}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                          <i class="fa fa-star"></i>
                        </div>
                      </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted text-sm">
                      <a href="{{ route('clientreview.index') }}" class="text-danger mr-2"> More Details.. </a>
                    </p>
                  </div>
                </div>
              </div>  --}}

                {{-- services --}}
                {{--  <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Services</h5>
                          <span class="h2 card-number font-weight-bold mb-0">{{ $services->count() }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                            <i class="fa fa-cogs"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <a href="{{ route('services.index') }}" class="text-warning mr-2"> More Details.. </a>
                      </p>
                    </div>
                  </div>
                </div>  --}}

                {{-- Questions --}}
                {{--  <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Questions</h5>
                          <span class="h2 card-number font-weight-bold mb-0">{{ $questions->count() }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                            <i class="fa fa-question"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <a href="{{ route('questions.index') }}" class="text-info mr-2"> More Details.. </a>
                      </p>
                    </div>
                  </div>
                </div>  --}}

                {{-- Messages --}}
                <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Messages</h5>
                          <span class="h2 card-number font-weight-bold mb-0">{{ $messages->count() }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                            <i class="fa fa-comment"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <a href="{{ route('contactus.index') }}" class="text-success mr-2"> More Details.. </a>
                      </p>
                    </div>
                  </div>
                </div>
            </div>

        <!-- Page content -->



</div>





    @endsection
