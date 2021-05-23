@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Help') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table>
                        <tr>
                            <td><help-box help-Color = '#660c0c' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#9c140c' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#a60814' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#b10404' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#dc0404' font-Color = 'white'></help-box></td>
                        </tr>
                        <tr>
                            <td><help-box help-Color = '#090606' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#4c4c4c' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#7c7c7c' font-Color = 'white'></help-box></td>
                            <td><help-box help-Color = '#f9f9f9' font-Color = 'black'></help-box></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
