@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            {{--            <h3 class="box-title">Categories</h3>--}}
            <div class="box-tools pull-right">
{{--                <div class="col-md-9">Profile picture</div>--}}
                <div class="card" style="width: 18rem;">
                    @if($user->image)
                        <img class="card-img-top img-circle profile-avatar" src="{{asset('images/'. $user->image)}}" alt="">
                    @endif
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                                <label class="tx-11 font-weight-bold mb-0 text-uppercase">Name :
                                </label>
                                {{$user->name}}
                        </li>
                        <li class="list-group-item">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Email :
                            </label>
                            {{$user->email}}
                        </li>
                        <li class="list-group-item">
                            <label class="tx-11 font-weight-bold mb-0 text-uppercase">Joined :
                            </label>
                            {{$user->created_at}}
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('profile.edit', $user->id)}}" class="card-link">Edit Profile</a>
                        <a href="{{route('upload')}}" class="card-link">Upload Book</a>
                    </div>
                </div>
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
            </div>
            <!-- /.box-tools -->
        </div>
        <div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <hr>
            <div class="col-md-9">
                @if(count($books) > 0)
                    @foreach($books as $book)
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-fluid">
                            </div>
                            <div class="col-md-9 text-center">
                                <h2>{{$book->title}}</h2>
                                <p>{{$book->info}}</p>
                                <br>
                                Author : {{$book->author}} <br>
                                <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>
                                <a href="{{route('book', $book->id)}}" class="btn btn-warning">More info</a>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @endif
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection


