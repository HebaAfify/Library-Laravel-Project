<div class="card">
    <div class="card-header text-center">Categories</div>

    <div class="card-body">

@if(count($categories) > 0)
    <ul class="nav nav-link">
        @foreach($categories as $category)
            <li><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
@endif

    </div>
</div>
