@extends('backpanel.layouts.master')
 {{-- flash message --}}
    @include('backpanel.layouts.sucess')
{{--/ flash message --}}
<div class="d-flex justify-content-between">
    <a href="{{ route('permission.create') }}" class="btn btn-primary">Create Permission</a>
    </div>
<h2>All Permissions</h2>
<table class="table table-hover ">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    @forelse ($permissions as $permission )
    <tr>
        <td>{{ strtoupper($permission->name) }}</td>
        <td width="200px">
            <a class="btn btn-warning btn-sm-rounded" href="{{ route('permission.edit',[$permission->id]) }}">
                <span class="material-icons">edit</span>
            </a>

            <form action="{{ route('permission.destroy',[$permission->id]) }}" method="post">
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
    <td colspan="4">No Permission Found</td>
    </tr>
    @endforelse

</table>
@endsection
