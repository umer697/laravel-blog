    @extends('backpanel.layouts.master')

    @section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('post.index') }}" class="btn btn-primary rounded">All Posts</a>
        </div>
        <h3 class="text-center">Create New Post</h3>

        @include('backpanel.layouts.errors')

        <div class="card card-primary">
            <!-- form start -->
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
             <div class="form-group">
                <label for="title">Title</label>
                <input
                type="text"
                class="form-control border"
                name="title"
                id="title"
                placeholder="  Enter Post">
             </div>

              <div class="form-group">
                <label for="content">Content</label>
                <textarea
                name="p_content"
                id="content"
                class="form-control border"
                cols="30"
                rows="10"
                ></textarea>
              </div>

              <div class="form-group">
                <label for="excerpt">Excerpt Here</label>
                <textarea
                name="excerpt"
                id="excerpt"
                class="form-control border"
                ></textarea>
              </div>

              <div class="form-group">
                <label for="category_id">Select Category</label>
                <select name="category_id" id="category_id" class="form-control border">
                    <option value="0"> &nbsp; Select Category</option>
                    @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @empty
                    @endforelse
                </select>
              </div>


                <div class="form-group">
                    <button
                    class="form-control btn btn-primary  rounded my-3"
                     type="submit"
                     value="draft"
                     name="status"
                      >Save Post</button>
                </div>

                <div class="form-group">
                    <button
                    class="form-control btn btn-success  rounded my-3"
                    type="submit"
                    value="publish"
                    name="status"
                    >Publish Post</button>
                </div>


            </div>

            </form>
        </div>

    @endsection
