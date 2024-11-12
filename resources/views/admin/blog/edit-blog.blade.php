@extends('admin.master')
@section('body')
    <div class="container-fluid main-container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Category Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('blogs.update',$blog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Category Name</label>
                                <select name="category_id" class="form-control">
                                    <option>Select A Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id  ==  $blog->category_id ? 'selected' : ' ' }} >{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Blog Title</label>
                                <input type="text" class="form-control" name="blog_title" value="{{ $blog->blog_title }}">
                            </div>
                            <div class="mb-3">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author" value="{{ $blog->author }}">
                            </div>
                            <div class="mb-3">
                                <label>Custom Date</label>
                                <input type="date" class="form-control" name="custom_date" value="{{ $blog->custom_date }}">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $blog->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset( $blog->image) }}" alt="" style="width: 50px; height: 50px">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Submit" class="btn btn-outline-primary form-control" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
