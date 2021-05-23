@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class = 'row'>
                        <div class="col-md-10">
                            {{ $type->name }}
                        </div>
                        <div class="col-md-2" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style = 'fill:#f9f9f9'>
                                <path d="{{ $type->icon }}"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h5 class = 'my-header'>Lists : </h5>
                    <br>
                    @foreach($type->lists as $list)
                        <a class ='siteLink' href = '#'>{{$list->name}}</a>
                        <br>
                    @endforeach
                    <hr>
                    <h5 class = 'my-header'>Sites : </h5>
                    <br>
                    @foreach($type->sites as $site)
                        <a class ='siteLink' href = '#'>{{$site->name}}</a>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
