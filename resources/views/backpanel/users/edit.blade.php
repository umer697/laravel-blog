@extends('backpanel.layouts.master')

@section('content')
<div class="d-flex justify-content-between">
    <a href="{{ route('user.index') }}" class="btn btn-primary rounded">All Users</a>
    </div>
    <h3 class="text-center">Update A {{ $user->name }}</h3>

    @include('backpanel.layouts.errors')

    <div class="card card-primary">
        <!-- form start -->
        <form action="{{ route('user.update',[$user->id]) }}" method="post" enctype="multipart/form">
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
              placeholder="Enter Name"
              value="{{ $user->name }}">

            </div>

            <div class="form-group">
              <label for="email">E-Mail</label>
              <input
              type="email"
              class="form-control border"
              name="email"
              id="email"
              placeholder="Enter E-mail"
              value="{{ $user->email }}">
            </div>

            <div class="form-group">
                <label for="roles">Roles</label>
                <select id="roles" value="{{ $user->email }}" name="role_id" class="form-control border">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}" @if ($role->id === $user->role_id) selected @endif> {{ strtoupper($role->name) }}</option>
                    @endforeach
                </select>
            </div>

                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" id="avatar" class="mt-3"  >

            <div class="form-group">
                <button class="form-control btn btn-primary btn-block rounded my-3" type="submit">
                    Update User</button>
            </div>



        </form>
      </div>

@endsection
