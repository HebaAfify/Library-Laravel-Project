
    <div class="card">
        <div class="card-header text-center">Comments</div>

        <div class="card-body">
            @include('partial.alerts')
            <form action="{{route('comment', $book->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="comment" placeholder="Enter Your Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="addcomment" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            <hr>
            @if(count($book->comments) > 0)
                @foreach($book->comments as $comment)
                    <div class="row">
                        <div class="col-9">
                            <h3>{{$comment->user->name}}</h3>
                        </div>
                        <div class="col-3">
                            <span class="text-muted">{{$comment->created_at}}</span>
                        </div>
                        <div class="col-6">
                        <p>{{$comment->comment}}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

