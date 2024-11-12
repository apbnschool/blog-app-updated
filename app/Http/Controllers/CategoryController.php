<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }
    public function manageCategory(){
        return view('admin.category.manage-category',[
            'categories' => Category::all(),
        ]);
    }
    public function store(Request $request){
        Category::saveCategory($request);
        return redirect(route('manage.category'));
    }
    public function status($id){
        Category::status($id);
        return redirect(route('manage.category'));
    }
    public function destroy(Request $request, $id){
        Category::deleteCategory($request,$id);
        return redirect(route('manage.category'));
    }

    public function editCategory($id){
        return view('admin.category.edit-category',[
            'category' =>Category::find($id)
        ]);
    }

    public function updateCategory(Request $request, $id){
//        return $request;
        Category::updateCategory($request,$id);
        return redirect(route('manage.category'));
    }
}

