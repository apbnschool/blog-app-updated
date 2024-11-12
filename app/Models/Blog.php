<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use function Symfony\Component\String\u;

class Blog extends Model
{
    use HasFactory;
    private static $blog,$image,$imageNewName,$extension,$directory,$imageUrl;

    public static function saveBlog($request,$id = Null){
        if ($id != Null){
            self::$blog =  Blog::find($id);
        }else{
            self::$blog = new Blog();
        }
         self::$blog->category_id = $request->category_id;
         self::$blog->blog_title = $request->blog_title;
         self::$blog->slug = Str::slug($request->blog_title);
         self::$blog->author = $request->author;
         self::$blog->custom_date = $request->custom_date;
         self::$blog->description = $request->description;
         if ($request->file('image')){
             if (file_exists(self::$blog->image)){
                 unlink(self::$blog->image);
             }
             self::$blog->image = self::getImageUrl($request);
         }
         self::$blog->save();
    }

    private static function getImageUrl($request){
      self::$image = $request->file('image');
      self::$extension = self::$image->extension();
      self::$imageNewName = rand(111,999).'.'.self::$extension;
      self::$directory = 'admin-assets/blog-image/';
      self::$image->move(self::$directory,self::$imageNewName);
      self::$imageUrl = self::$directory.self::$imageNewName;
      return self::$imageUrl;
    }

    public static function changeStatus($id){
       self::$blog =  Blog::find($id);
       if (self::$blog->status == 0){
           self::$blog->status = 1;
       }else{
           self::$blog->status = 0;
       }
        self::$blog->save();
    }

    public static function deleteBlog($id){
        self::$blog = Blog::find($id);
        if (file_exists(self::$blog->image)){
            unlink(self::$blog->image);
        }
        self::$blog->delete();
    }






    public function category(){
        return $this->belongsTo(Category::class);
    }


}
