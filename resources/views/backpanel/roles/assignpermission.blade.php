@extends('backpanel.layouts.master')

@section('content')
@include('backpanel.layouts.sucess')
<div class="d-flex justify-content-between">

    <a href="{{ route('role.index') }}" class="btn btn-primary rounded" >All Roles</a>

</div>

    <h3 class="text-center">Assign Permission To {{ $role->name }}</h3 >


    @include('backpanel.layouts.errors')


    <form action="{{ route('role.store.permission',[$role->id]) }}" method="post">
        @csrf
        @forelse ($permissions as $permission)
        <div class="form-group form-check" style="margin-right: 20px;" >
        <table class="table table-bordered table-dark" >
            <tr >
                <td>
                    <label class=" text-white " for="permission">{{ $permission->name }}</label>
                </td>
                 <td  class="form-check-input">
                    <input
                    type="checkbox"
                    name="permission[]"
                    id="permission"
                    value="{{ $permission->id }}"
                    @if ($role->hasPermissionTo($permission->id)) checked  @endif
                    >
                </td>
            </tr>
        </table>
        </div>
        @empty
            <p>No Permission Added Yet</p>
        @endforelse
        <button  type="submit" class="btn btn-primary btn-block ">Save Permission</button>
    </form>

@endsection
