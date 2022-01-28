@extends('backpanel.layouts.master')
 {{-- flash message --}}
    @include('backpanel.layouts.sucess')
{{--/ flash message --}}
<div class="d-flex justify-content-between">
    <a href="{{ route('post.create') }}" class="btn btn-primary">Create Post</a>
 </div>
<h2>All Posts</h2>
<table class="table table-hover ">
    <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Actions</th>
    </tr>


     @foreach ($posts as $post )
    <tr>
        <td>{{ $post->title }}</td>
        <td>{{ $post->slug }}</td>
        <td class="d-flex" width="200px">
           <div >


            <a class="btn btn-warning btn-sm-rounded" href="{{ route('post.edit',[$post->id]) }}">
                <span class="material-icons">edit</span>
            </a>
           </div>
           &nbsp;
            <form action="{{ route('post.destroy',[$post->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-sm-rounded "href="">
                    <span class="material-icons">delete</span>

                </button>
            </form>

        </td>
    </tr>

    {{-- @empty
    <tr>
    <td colspan="4">No Post Found</td>
    </tr> --}}
    @endforeach

</table>
@endsection
