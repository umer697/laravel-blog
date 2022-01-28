@extends('backpanel.layouts.master')
 {{-- flash message --}}
    @include('backpanel.layouts.sucess')
{{--/ flash message --}}
<div class="d-flex justify-content-between">
    <a href="{{ route('role.create') }}" class="btn btn-primary">Create Role</a>
 </div>
<h2>All Roles</h2>
<table class="table table-hover ">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    @forelse ($roles as $role )
    <tr>
        <td>{{ strtoupper($role->name) }}</td>
        <td class="d-flex" width="200px">
           <div >
            <a href="{{ route('role.assign.permission',[$role->id]) }}" class="btn btn-success btn-sm-rounded" data-toggle="tooltip" data-placement="left" title="Assign Permission" >
                <span class="material-icons">connect_without_contact</span>

            </a>

            <a class="btn btn-warning btn-sm-rounded" href="{{ route('role.edit',[$role->id]) }}">
                <span class="material-icons">edit</span>
            </a>
           </div>
           &nbsp;
            <form action="{{ route('role.destroy',[$role->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm-rounded "href="">
                    <span class="material-icons">delete</span>

                </button>
            </form>

        </td>
    </tr>

    @empty
    <tr>
    <td colspan="4">No Role Found</td>
    </tr>
    @endforelse

</table>
@endsection
