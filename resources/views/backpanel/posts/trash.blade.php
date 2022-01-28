@extends('backpanel.layouts.master')
 {{-- flash message --}}
    @include('backpanel.layouts.sucess')
{{--/ flash message --}}
<div class="d-flex justify-content-between">
    <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>
    <a href="{{ route('category.trash') }}"style="margin-right:10px;" class="btn btn-danger">Trash </a>
 </div>
<h2>Trashed Categories</h2>
<table class="table table-hover ">
    <tr>
        <th>Name</th>
        <th>Slug</th>
        <th>Actions</th>
    </tr>

    @forelse ($categories as $category )
    <tr>
        <td>{{ ($category->name) }}</td>
        <td>{{ ($category->slug) }}</td>
        <td class="d-flex" width="200px">
           <div >
            <form action="{{ route('category.restore',[$category->id]) }}" method="post">
                @csrf
                <button class="btn btn-warning btn-sm-rounded "href="">
                    <span class="material-icons">restore</span>

                </button>
            </form>
           </div>

           &nbsp;
            <form action="{{ route('category.permanent.delete',[$category->id]) }}" method="post">
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
    <td colspan="4">No Category Found</td>
    </tr>
    @endforelse

</table>
@endsection
