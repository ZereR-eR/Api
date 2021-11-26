@extends("master")
@section("title")
    Article Create
@endsection
@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mt-5">
            <form action="{{ route("category.update",$category->id) }}" method="post">
                @csrf
                @method("put")
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="title" class="form-control mb-3" value="{{ $category->title }}">
                    <button class="btn btn-primary">Update</button>
                </div>
            </form>
            @include("category.list")
        </div>
    </div>
</div>

@endsection
