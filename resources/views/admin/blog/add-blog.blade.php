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
                        <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Category Name</label>
                                <select name="category_id" class="form-control">
                                    <option>Select A Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Blog Title</label>
                                <input type="text" class="form-control" name="blog_title">
                            </div>
                            <div class="mb-3">
                                <label>Author</label>
                                <input type="text" class="form-control" name="author">
                            </div>
                            <div class="mb-3">
                                <label>Custom Date</label>
                                <input type="date" class="form-control" name="custom_date">
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
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
