    @extends('backpanel.layouts.master')

    @section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('role.index') }}" class="btn btn-primary rounded">All Roles</a>
        </div>
        <h3 class="text-center">Create New Role</h3>

        @include('backpanel.layouts.errors')

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('role.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="name">Name</label>
                <input
                type="text"
                class="form-control border"
                name="name"
                id="name"
                placeholder="Enter Role">

                </div>
                <div class="form-group">
                    <button class="form-control btn btn-primary btn-block rounded my-3" type="submit">Save Role</button>
                </div>



            </form>
        </div>

    @endsection
