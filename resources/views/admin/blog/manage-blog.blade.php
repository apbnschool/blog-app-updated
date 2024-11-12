@extends('admin.master')
@section('body')
    <div class="container-fluid main-container mt-3">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Category Form</h3>
                        <br>
                        <h3>{{ session('message') }}</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered table-striped table-primary">
                            <thead>
                            <tr>
                                <th>sl</th>
                                <th>Title</th>
                                <th>Category Name</th>
                                <th>Author</th>
                                <th>Image</th>
                                <th>description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->blog_title}}</td>
                                    <td>{{$blog->category->category_name}}</td>
                                    <td>{{$blog->author}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td><img src="{{ asset($blog->image) }}" alt="" style="height: 50px; width: 50px"></td>
                                    <td>{{ $blog->status == 0 ? 'Pending' : 'Active' }}</td>
                                    <td class="d-flex">
                                        @if($blog->status == 0 )
                                            <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-warning">Active</a>
                                        @else
                                            <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-success">Pending</a>
                                        @endif
                                            <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('blogs.destroy',$blog->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure delete this!!')">Delete</button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
