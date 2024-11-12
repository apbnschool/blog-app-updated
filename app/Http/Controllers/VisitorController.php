<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Foundation\Console\PackageDiscoverCommand;
use Illuminate\Http\Request;
use function Carbon\this;
use Session;

class VisitorController extends Controller
{
    private $visitor;
    public function signUpForm(){
        return view('website.visitor.sign-up');
    }
    public function signInForm(){
        return view('website.visitor.sign-in');
    }
    public function signUp(Request $request){
        Visitor::saveInfo($request);
        return back();
    }
    public function signIn(Request $request){

     $this->visitor = Visitor::where('email',$request->user_name)
            ->orWhere('phone',$request->user_name)
            ->first();

     if ($this->visitor){

         if (password_verify($request->password,$this->visitor->password)){
             Session::put('visitorId',$this->visitor->id);
             Session::put('visitorName',$this->visitor->name);
             return back()->with('message','Successfully Sign In');
         }else{
             return back()->with('message','invalid password');
         }

     }else{
         return back()->with('message','invalid email or phone');
     }

    }

    public function signOut(){
        Session::forget('visitorId');
        Session::forget('visitorName');
        return back();
    }
}
