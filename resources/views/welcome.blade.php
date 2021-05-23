@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    </div>
    <!-- Start of the BIG Loop -->
    @foreach(\App\Models\Slist::all() as $lst)
        <!-- Start Row -->
        @if($loop->index%4 == 0)
            <div class="row justify-content-center">
        @endif
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">{{ $lst->name }}</div>

                <div class="card-body">
                    @if ($lst->sites()->count() < 1)
                        <div class="alert " role="alert">
                            Empty List
                        </div>
                    @else
                        <!-- Start of Inner Loop For Sites -->
                        @foreach($lst->sites as $site)
                        <a class = 'siteLink' href = "#"> {{$site->name}}</a>
                        @endforeach
                        <!-- End of Inner Loop For Sites -->
                    @endif
                </div>
            </div>
        </div>
        @if($loop->index%4 == 3 || $loop->index == \App\Models\Slist::all()->count()-1)
            </div>
        @endif
    @endforeach
    <!-- End of the BIG Loop -->
    
</div>
@endsection
