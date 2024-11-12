<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use function Carbon\this;

class HomeController extends Controller
{
    private $blog,$blogs,$item,$value=[];
    public function index(){
        return view('website.home.home',[
            'blogs'=>Blog::where('status',1)->get()
        ]);
    }

//    public function details($id,$slug){
    public function details($slug){
        $this->blog = Blog::where('slug',$slug)->first();
        $this->blogs = Blog::where('category_id',$this->blog->category_id)->get();
        foreach ($this->blogs as $this->item){
            if ($this->item->id != $this->blog->id){
                array_push($this->value,$this->item);
            }
        }
        return view('website.blog.details',[
            'blog'=>$this->blog,
//            Comment::where('blog_id',$id),
            'comments'=>Comment::where('blog_id',$this->blog->id)->get(),
            'blogs'=>$this->value,
        ]);
    }
}
