@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Profile</h1>
@endsection

@section('content')
    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <div class="box-tools pull-right">
                @if($user->image)
                    <img style="height: 200px; width: 200px;" class="card-img-top img-circle profile-avatar" src="{{asset('images/'. $user->image)}}" alt="">
                @endif
                </div>
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
            </div>
            <!-- /.box-tools -->
        <div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <hr>
            <form action="{{route('profile.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user->email}}">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>

        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection


