@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categories</h1>
@endsection

@section('content')
    <div class="box box-solid box-primary">
        <div class="box-header with-border">
{{--            <h3 class="box-title">Categories</h3>--}}
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a class="btn btn-primary" href="{{route('categories.create')}}">Add Category</a>
            </div>
            <div>
                @include('partial.alerts')
            </div>
            <!-- /.box-tools -->
        </div>
        <div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Name</td>
                </tr>
                </thead>
                @if(count($categories) > 0)
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection


