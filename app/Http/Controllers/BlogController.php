<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.manage-blog',[
            'blogs' => Blog::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.add-blog',[
           'categories' => Category::where('status',1)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Blog::saveBlog($request);
        return redirect(route('blogs.index'))->with('message','Blog added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Blog::changeStatus($id);
        return redirect(route('blogs.index'))->with('message','Blog added Successfully');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blog.edit-blog',[
            'categories' => Category::where('status',1)->get(),
            'blog' =>Blog::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Blog::saveBlog($request,$id);
        return redirect(route('blogs.index'))->with('message','Blog added Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::deleteBlog($id);
        return redirect(route('blogs.index'))->with('message','Blog Delete Successfully');
    }
}
