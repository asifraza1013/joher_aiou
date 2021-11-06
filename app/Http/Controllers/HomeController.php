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
        $comments = Comment::with('reply')
        ->orderBy('id', 'desc')
        ->get();
        return view('front.pages.index',compact("banner","noti",'description','comments'));
    }

    /**
     * get comment list
     */
    public function getCommentList(Request $request)
    {
        $title = 'Commnet List';
        $comments = Comment::paginate(50);
        return view('backend.pages.comments', compact([
            'title',
            'comments'
        ]));
    }
    public function removeComment($id)
    {
        Comment::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Comment removed successfully');
    }
}
