@extends('layouts.admin')

@section('page-title', 'Profile Settings')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Profile Settings</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">General Update</h4>
                    <p class="text-muted mb-3">
                        Please set the value of plans
                    </p>

                    <form class="form-parsley" action="{{ route('admin.general.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}" placeholder="Basic">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}" placeholder="Gold">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="29.99">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div><!--end form-group-->
                    </form><!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
        
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Password Update</h4>
                    <p class="text-muted mb-3">
                        Please set the value of plans
                    </p>

                    <form class="form-parsley" action="{{ route('admin.pass.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password" class="fw-bolder">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="***********">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password_confirmation" class="fw-bolder">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="" placeholder="***********">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-gradient-primary waves-effect waves-light">
                                Submit
                            </button>
                        </div><!--end form-group-->
                    </form><!--end form-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div>
    </div>
@endsection
