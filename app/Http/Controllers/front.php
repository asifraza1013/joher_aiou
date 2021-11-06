<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Addlink;
use App\Banner;
use App\Notification;
use App\Addclass;
use App\Video;
use App\Assignment;
use App\Description;
use App\Lesson;
use App\Comment;
use App\Reply;
use App\Theses;
use Artisan;
use Illuminate\Support\Facades\Auth;

class front extends Controller
{
    // public function practice(){

    // 	return view('front.pages.practice');
    // }

public function index(){

//   Artisan::call('cache:clear');
//   Artisan::call('config:clear');
//   Artisan::call('view:clear');
//   Artisan::call('route:clear');
//   Artisan::call('up');
    $banner = banner::all();
     $noti = notification::all();
     $description = description::all();
      $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->get();
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->get();


        return view('front.pages.index',compact("banner","noti","description",'comment','reply'));
    }

public function about(){


$comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->get();
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->get();

return view('front.pages.about',compact('comment','reply'));
}
    public function admission(){
        $link= addlink::all();
        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->get();
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->get();


    	return view('front.pages.admission',compact("link","comment",'reply'));
    }

    public function books(){
$class= addclass::all();
$comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->get();
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->get();
    	return view('front.pages.books',compact("class","comment",'reply'));
    }

    public function applicationform (){
$link= addlink::where('category', 'Application')->get();
$comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

    	return view('front.pages.application-form ',compact("link","comment",'reply'));
    }

    public function assignment(){
        $class= addclass::all();
$comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

    	return view('front.pages.assignment',compact("class","comment",'reply'));
    }
    public function guesspaper(){
        $class= addclass::all();
        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

        return view('front.pages.guesspaper',compact("class","comment",'reply'));
    }
    public function results(){
 $link= addlink::where('category', 'Result')->get();
 $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

        return view('front.pages.results',compact('link',"comment",'reply'));
    }
    public function thesis(){
        $thesis= theses::all();
        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
        $description = addlink::where('category', 'Table Thesis')->get();
        return view('front.pages.thesis',compact("thesis","comment",'reply','description'));
    }
     public function teaching(){
        $thesis= theses::where('course_id', '8607')->get();
        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
            $description = addlink::where('category', 'Teaching Practice')->get();
        return view('front.pages.teaching',compact("thesis","comment",'reply','description'));
    }
     public function research(){
        $thesis= theses::where('course_id', '8613')->get();
        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
        $description = addlink::where('category', 'Research Project')->get();
        return view('front.pages.research',compact("thesis","comment",'reply','description'));
    }
     public function practice(){
        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
        return view('front.pages.practice',compact("comment",'reply'));
    }

    public function videolectures(){
         $class= addclass::all();
         $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

        return view('front.pages.video-lectures',compact("class","comment",'reply'));
    }
    public function video_lectures(){
        $class= addclass::all();
         $video= video::all();
         $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

        return view('backend.pages.video_lectures',compact("video","class","comment",'reply'));
    }
    public function  lessonplan(){
        $lesson = lesson::all();

        $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

        return view('front.pages.lessonplan',compact("lesson","comment",'reply'));
    }

 public function compressor(){
 $link= addlink::all();
 $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);

        return view('front.pages.compressor',compact('link',"comment",'reply'));
    }

    /**
     * Logout user by get route
     */
    public function userLogout()
    {
        Auth::logout();
        return redirect(route('index'));
    }

}
