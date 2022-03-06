@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Profile</div>

        <div class="card-body">
            <div class="col-md-9">
                {{$user->name}}
            </div>
        </div>
    </div>
@endsection
