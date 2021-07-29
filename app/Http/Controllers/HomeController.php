<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Notification;
use App\Description;
use App\Comment;
use App\Reply;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $banner = banner::all();
     $noti = notification::all();
     $description = notification::all();
     $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);


        return view('front.pages.index',compact("banner","noti",'description','comment','reply'));
    }
}
