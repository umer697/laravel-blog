    @extends('backpanel.layouts.master')

    @section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('category.index') }}" class="btn btn-primary rounded">All Categories</a>
        </div>
        <h3 class="text-center">Update A Category</h3>

        @include('backpanel.layouts.errors')

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('category.update',[$category->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="card-body">
                <div class="form-group">
                <label for="name">Name</label>
                <input
                type="text"
                class="form-control border"
                name="name"
                id="name"
                placeholder="Enter Category"
                value="{{ $category->name }}"
                >
                </div>


                <div class="form-group">
                    <button class="form-control btn btn-primary btn-block rounded my-3" type="submit">Update Category</button>
                </div>



            </form>
        </div>

    @endsection
