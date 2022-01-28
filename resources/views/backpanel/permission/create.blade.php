    @extends('backpanel.layouts.master')

    @section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('permission.index') }}" class="btn btn-primary rounded">All Permissions</a>
        </div>
        <h3 class="text-center">Create New Permission</h3>

        @include('backpanel.layouts.errors')

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('permission.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="name">Name</label>
                <input
                type="text"
                class="form-control border"
                name="name"
                id="name"
                placeholder="Enter Permission">

                </div>
                <div class="form-group">
                    <button class="form-control btn btn-primary btn-block rounded my-3" type="submit">Save permission</button>
                </div>



            </form>
        </div>

    @endsection
