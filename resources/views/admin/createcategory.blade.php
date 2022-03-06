@extends('adminlte::page')

@section('title', 'Add Category')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <div class="box box-solid box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Add new category</h3>
            <div class="box-tools pull-right">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <a class="btn btn-primary" href="{{route('categories.index')}}">View All Categories</a>
            </div>
            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form method="post" action="{{route('categories.store')}}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                    <button type="submit" name="add" class="btn btn-primary btn-block">Add Category</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection


