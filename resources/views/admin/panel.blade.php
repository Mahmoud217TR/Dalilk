@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">{{ __('Site Map') }}</div>

                    <div class="card-body">
                        <a  class ='siteLink' href = '/'>Welcome</a>
                        <br>
                        <a  class ='siteLink' href = '/home'>Home</a>
                        <br>
                        <a  class ='siteLink' href = '/help'>Help</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Admins Panel') }}</div>

                    <div class="card-body">
                        <a  class ='siteLink' href = '/admins/add-type'>Add a new Type</a>
                        <br>
                        <a  class ='siteLink' href = '/admins/edit-type-list'>Edit an existing Type</a>
                        <br>
                        <a  class ='siteLink' href = '/admins/delete-type-list'>Delete an existing Type</a>
                        <hr>
                        <a  class ='siteLink' href = '/admins/add-site'>Add a new Site</a>
                        <br>
                        <a  class ='siteLink' href = '#'>Edit an existing Site</a>
                        <br>
                        <a  class ='siteLink' href = '#'>Delete an existing Site</a>
                        <hr>
                        <a  class ='siteLink' href = '/admins/create-list'>Create a new List</a>
                        <br>
                        <a  class ='siteLink' href = '#'>Edit an existing List</a>
                        <br>
                        <a  class ='siteLink' href = '#'>Delete an existing List</a>
                        <hr>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
