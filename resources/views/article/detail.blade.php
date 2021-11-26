@extends("master")
@section("title")
    Article Create
@endsection
@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mt-5">
                <div class="card mb-4">
                    <div class="card-body">
                        <h4>{{ $article->name }}</h4>
                        <p>{{ $article->description }}</p>
                        <small>{{ \App\Models\Category::find($article->category_id)->title }}</small>
                        <hr>
                        <a href="{{ route("article.index") }}" class="btn btn-primary">See All</a>
                        <a href="{{ route("article.edit",$article->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route("article.destroy",$article->id) }}" method="post" class="d-inline-block">
                            @csrf
                            @method("delete")
                            <button class="btn btn-danger">Del</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
