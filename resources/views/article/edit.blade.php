@extends("master")
@section("title")
    Article Create
@endsection
@section("content")
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 mt-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route("article.update",$article->id) }}" method="post">
                @csrf
                @method("put")
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old("name",$article->name) }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-select">
                        @foreach(\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $article->category_id ? "selected" : "" }}>{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" rows="8">{{ old("description",$article->description) }}</textarea>
                </div>

                <button class="btn btn-primary">
                    Update Article
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
