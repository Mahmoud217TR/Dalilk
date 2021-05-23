@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Create a new Site') }}</div>

                <div class="card-body">
                    <!-- Form Start -->
                    <form method="POST" action="/admins/add-site/confirm">
                        @csrf

                        <!-- Form Row 'name' -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Site Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Row 'check' -->
                        <div class="form-group row">
                            <label for="check" class="col-md-4 col-form-label text-md-right">{{ __('Site Check') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('check') is-invalid @enderror" name="check" required autofocus>

                                @error('check')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Form Row 'desc' -->
                        <div class="form-group row">
                            <label for="desc" class="col-md-4 col-form-label text-md-right">{{ __('Site Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="desc" class="form-control @error('desc') is-invalid @enderror" name="desc" required style='height: 150px;resize: none;'>
                                </textarea>

                                @error('desc')
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

                                <a class="btn btn-link" href="https://sitecheck.sucuri.net/" target="_blank">{{ __('Check website') }}</a>
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
