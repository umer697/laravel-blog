    @extends('backpanel.layouts.master')

    @section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('permission.index') }}" class="btn btn-primary rounded">All Permissions</a>
        </div>
        <h3 class="text-center">Update A permission</h3>

        @include('backpanel.layouts.errors')

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('permission.update',[$permission->id]) }}" method="post" enctype="multipart/form-data">
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
                placeholder="Enter Permission"
                value="{{ $permission->name }}"
                >

                </div>
                <div class="form-group">
                    <button class="form-control btn btn-primary btn-block rounded my-3" type="submit">Update Permission</button>
                </div>



            </form>
        </div>

    @endsection
