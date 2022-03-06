
@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Book Name</div>

        <div class="card-body">
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
        </div>
    </div>
    <hr>
    @include('commentbox')
@endsection

