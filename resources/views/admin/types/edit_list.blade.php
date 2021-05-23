@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Types') }}</div>

                <div class="card-body">
                    @foreach(\App\Models\Stype::all() as $type)
                        <a  class ='siteLink' href = '/admins/edit-type/{{$type->id}}'>{{$type->name}}</a>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
