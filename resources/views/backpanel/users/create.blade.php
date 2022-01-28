    @extends('backpanel.layouts.master')

    @section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
        </div>
        <h3 class="text-center">Create New User</h3>

        @include('backpanel.layouts.errors')

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="name">Name</label>
                <input
                type="text"
                class="form-control border"
                name="name"
                id="name"
                placeholder="Enter Name">

                </div>

                <div class="form-group">
                <label for="email">E-Mail</label>
                <input
                type="email"
                class="form-control border"
                name="email"
                id="email"
                placeholder="Enter E-mail">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                    type="password"
                    class="form-control border"
                    name="password"
                    id="password"
                    placeholder="Enter Password">
                </div>


                <div class="form-group">
                    <label for="roles">Roles</label>
                    <select id="roles" name="role_id" class="form-control border">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ strtoupper($role->name) }}</option>
                        @endforeach
                    </select>
                </div>

                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" id="avatar" class="mt-3"  >


                <div class="form-group">
                    <button class="form-control btn btn-primary btn-block rounded my-3" type="submit">Save User</button>
                </div>



            </form>
        </div>

    @endsection
