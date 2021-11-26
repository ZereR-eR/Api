@extends("master")
@section("title")
    Article List
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 mt-5">
                @foreach($articles as $article)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4>{{ $article->name }}</h4>
                            <p>{{ \Illuminate\Support\Str::words($article->description,20) }}</p>
                            <small class="badge bg-primary">{{ $article->category->title }}</small>
                            <hr>
                            <a href="{{ route("article.show",$article->id) }}" class="btn btn-primary">See Detail</a>
                            <a href="{{ route("article.edit",$article->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route("article.destroy",$article->id) }}" method="post" class="d-inline-block">
                                @csrf
                                @method("delete")
                                <button class="btn btn-danger">Del</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
