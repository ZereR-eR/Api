<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Control</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Models\Category::all() as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->title }}</td>
            <td>
                <a href="{{ route("category.edit",$category->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route("category.destroy",$category->id) }}" class="d-inline-block" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">Del</button>
                </form>
            </td>
            <td>{{ $category->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
