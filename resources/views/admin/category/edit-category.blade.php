@extends('admin.master')
@section('body')
    <div class="container-fluid main-container mt-3">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Category Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.category',$category->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}">
                            </div>
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image">
                                <img src="{{ asset($category->image) }}" alt="" style="height: 50px; width: 50px;">
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
