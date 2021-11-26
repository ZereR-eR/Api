@extends("master")
@section("title")
    Article Create
@endsection
@section("content")

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6 mt-5">
            <form action="{{ route("category.store") }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="title" class="form-control mb-3 @error("title") is-invalid  @enderror" value="{{ old("title") }}" autofocus>
                    <button class="btn btn-primary">Create</button>
                </div>
            </form>
            @include("category.list")
        </div>
    </div>
</div>

@endsection
