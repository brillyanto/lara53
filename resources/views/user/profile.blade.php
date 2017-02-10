@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile View</div>
                <div class="panel-body">
                    <h1>{{ $user->name }} </h1>
                    <h5>Joined at :{{ $user->created_at->format('l j F Y') }} Age {{ $user->dob->age }} yrs</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
