@extends('backpanel.layouts.master')

 {{-- flash message --}}
 @include('backpanel.layouts.sucess')
{{--/ flash message --}}
<div class="d-flex justify-content-between">
    <a href="{{ route('user.create') }}" class="btn btn-primary">Create User</a>
    </div>
<h2>All Users</h2>
<table class="table table-hover ">
    <tr>
        <th>Thumb</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
    </tr>

    @forelse ($users as $user )
    <tr>
        <td>
        <img src="{{ $user->avatar }}" alt=" {{ $user->name }}" width="75">
        </td>
        <td>{{strtoupper( $user->name) }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ strtoupper($user->roles[0]->name) }}</td>
        <td width="200px">
            <a class="btn btn-warning btn-sm-rounded" href="{{ route('user.edit',[$user->id]) }}">
                <span class="material-icons">edit</span>
            </a>

            <form action="{{ route('user.destroy',[$user->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm-rounded"href="">
                    <span class="material-icons">delete</span>

                </button>
            </form>

        </td>
    </tr>

    @empty
    <tr>
    <td colspan="4">No User Found</td>
    </tr>
    @endforelse

</table>
@endsection
