@extends('layouts.admin')

@section('page-title', 'Edit Betting Tool')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Betting Tools</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Edit Betting Tool</h4>
                    <p class="text-muted mb-3">
                        Please update the fields to updaet data into database
                    </p>

                    <form class="form-parsley" action="{{ route('admin.betting.tool.update', $betting->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    @if (!is_null($betting->logo))
                                        <img src="{{ Storage::url($betting->logo) }}" class="img-fluid d-block" width="100px" alt="">
                                    @endif
                                    <label for="logo" class="fw-bolder">Logo</label>
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name" class="fw-bolder">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $betting->name) }}" placeholder="Paris sûrs">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link" value="{{ old('link', $betting->link) }}" placeholder="https://example.com">
                                    @error('link')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
    </div><!--end row-->
@endsection
@section('js')

@endsection
