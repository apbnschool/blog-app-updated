<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category, $image, $extension, $imageNewName, $directory, $imgUrl;

    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->image = self::getImageUrl($request);
        self::$category->save();
    }

    private static function getImageUrl($request){
        self::$image = $request->file('image');
        self::$extension = self::$image->extension();
        self::$imageNewName = $request->category_name.'-'.rand(11,999).'.'.self::$extension;
        self::$directory = 'admin-assets/category-image/';
        self::$image->move(self::$directory,self::$imageNewName);
        self::$imgUrl = self::$directory.self::$imageNewName;
        return self::$imgUrl;
    }
    public static function status($id){
        self::$category = Category::find($id);
        if (self::$category->status == 1){
            self::$category->status = 0 ;
        }else{
            self::$category->status = 1;
        }
        self::$category->save();
    }
    public static function deleteCategory($request, $id){
        self::$category = Category::find($id);
        if (file_exists(self::$category->image)){
            unlink(self::$category->image);
        }
        self::$category->delete();
    }

    public static function updateCategory($request,$id){
        self::$category = Category::find($id);
        self::$category->category_name = $request->category_name;
        if ($request->file('image')){
            if (file_exists(self::$category->image)){
                unlink(self::$category->image);
            }
            self::$category->image = self::getImageUrl($request);
        }
        self::$category->save();
    }
}
