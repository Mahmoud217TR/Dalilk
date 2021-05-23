@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create a new Type') }}</div>

                <div class="card-body">
                    <!-- Form Start -->
                    <form method="POST" action="/admins/add-type/confirm">
                        @csrf

                        <!-- Form Row 'name' -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Row 'icon' -->
                        <div class="form-group row">
                            <label for="icon" class="col-md-4 col-form-label text-md-right">{{ __('Type Icon Path') }}</label>

                            <div class="col-md-6">
                                <input id="icon" type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" required autofocus>

                                @error('icon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Button & Help Row -->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>

                                <a class="btn btn-link" href="https://iconmonstr.com/" target="_blank">{{ __('Help with icons ?') }}</a>
                            </div>
                        </div>
                        <!-- Form End -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
