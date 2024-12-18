@extends('layouts.admin')

@section('page-title', 'Pricing Plans')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Pricing Plans</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Pricing Plans</h4>
                    <p class="text-muted mb-3">
                        Please set the value of plans
                    </p>

                    <form class="form-parsley" action="{{ route('admin.setting') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Basic Plan Name</label>
                                    <input type="text" class="form-control" id="basic_plan_name" name="basic_plan_name" value="{{ setting('basic_plan_name') }}" placeholder="Basic">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Pro Plan Name</label>
                                    <input type="text" class="form-control" id="pro_plan_name" name="pro_plan_name" value="{{ setting('pro_plan_name') }}" placeholder="Gold">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Basic Plan Monthly</label>
                                    <input type="text" class="form-control" id="basic_plan_monthly" name="basic_plan_monthly" value="{{ setting('basic_plan_monthly') }}" placeholder="29.99">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Pro Plan Monthly</label>
                                    <input type="text" class="form-control" id="pro_plan_monthly" name="pro_plan_monthly" value="{{ setting('pro_plan_monthly') }}" placeholder="39.99">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Basic Plan Yearly</label>
                                    <input type="text" class="form-control" id="basic_plan_yearly" name="basic_plan_yearly" value="{{ setting('basic_plan_yearly') }}" placeholder="99.99">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Pro Plan Yearly</label>
                                    <input type="text" class="form-control" id="pro_plan_yearly" name="pro_plan_yearly" value="{{ setting('pro_plan_yearly') }}" placeholder="199.99">
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
