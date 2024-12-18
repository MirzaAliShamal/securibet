@extends('layouts.admin')

@section('page-title', 'Edit Money Bet')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Money Bets</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Edit Moneybet</h4>
                    <p class="text-muted mb-3">
                        Please update the fields to updaet data into database
                    </p>

                    <form class="form-parsley" action="{{ route('admin.moneybet.update', $moneybet->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country_id" class="fw-bolder">Country</label>
                                    <select name="country_id" class="form-control @error('country_id') is-invalid @enderror" id="country_id">
                                        <option>Select Country</option>
                                        @foreach (countries() as $country)
                                            <option value="{{ $country->id }}" {{ old('country_id', $moneybet->country_id) == $country->id ? 'selected' : '' }}>{{ Str::upper($country->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="league" class="fw-bolder">League</label>
                                    <input type="text" class="form-control @error('league') is-invalid @enderror" id="league" name="league" value="{{ old('league', $moneybet->league) }}" placeholder="PRO LEAGUE">
                                    @error('league')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="total_score">Total Score</label>
                                    <input type="text" class="form-control @error('total_score') is-invalid @enderror" id="total_score" name="total_score" value="{{ old('total_score', $moneybet->total_score) }}" placeholder="Total Goals Under 2.5">
                                    @error('total_score')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="text" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date', $moneybet->date) }}" placeholder="10 Nov">
                                    @error('date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ old('time', $moneybet->time) }}" placeholder="11:00">
                                    @error('time')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="team_1">Team 1</label>
                                    <input type="text" class="form-control @error('team_1') is-invalid @enderror" id="team_1" name="team_1" value="{{ old('team_1', $moneybet->team_1) }}" placeholder="Antequera">
                                    @error('team_1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="team_2">Team 2</label>
                                    <input type="text" class="form-control @error('team_2') is-invalid @enderror" id="team_2" name="team_2" value="{{ old('team_2', $moneybet->team_2) }}" placeholder="UD Ibiza">
                                    @error('team_2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="combine_percentage">Combine Percentage</label>
                                    <input type="text" class="form-control @error('combine_percentage') is-invalid @enderror" id="combine_percentage" name="combine_percentage" value="{{ old('combine_percentage', $moneybet->combine_percentage) }}" placeholder="87%">
                                    @error('combine_percentage')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="odds">ODDS</label>
                                    <input type="text" class="form-control @error('odds') is-invalid @enderror" id="odds" name="odds" value="{{ old('odds', $moneybet->odds) }}" placeholder="1.45">
                                    @error('odds')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="url">URL</label>
                                    <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $moneybet->url) }}" placeholder="https://oddspedia.com/football/antequera-ud-ibiza-1255619">
                                    @error('url')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="status" class="fw-bolder">Status</label>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                                        <option>Select Status</option>
                                        <option value="active" {{ old('status', $moneybet->status) == 'active' ? 'selected' : '' }}>Active</option>
                                        <option value="disabled" {{ old('status', $moneybet->status) == 'disabled' ? 'selected' : '' }}>Disabled</option>
                                    </select>
                                    @error('status')
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
    <script>
        $('#date').bootstrapMaterialDatePicker({
            format : 'DD MMM',
            time: false
        });
        $('#time').bootstrapMaterialDatePicker({
            format : 'HH:mm',
            time: true,
            date: false
        });
    </script>
@endsection
