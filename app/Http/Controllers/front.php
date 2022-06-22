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
use Illuminate\Support\Facades\DB;

class front extends Controller
{
    // public function practice(){

    // 	return view('front.pages.practice');
    // }

    public function index()
    {

        //   Artisan::call('cache:clear');
        //   Artisan::call('config:clear');
        //   Artisan::call('view:clear');
        //   Artisan::call('route:clear');
        //   Artisan::call('up');
        $banner = banner::all();
        $noti = notification::all();
        $description = description::all();
        $comments = Comment::with('reply')
        ->orderBy('id', 'desc')
        ->get();
        return view('front.pages.index', compact("banner", "noti", "description", 'comments'));
    }

    public function about()
    {
        return view('front.pages.about');
    }
    public function admission()
    {
        return view('front.pages.admission');
    }

    public function books()
    {
        $class = addclass::
        where('name', '!=', 'Research Project')
        ->where('name', '!=', 'Teaching Practice')
        ->select()->get();
        return view('front.pages.books', compact("class"));
    }

    public function applicationform()
    {
        $link = addlink::where('category', 'Application')->get();
        return view('front.pages.application-form ', compact("link"));
    }

   public function assignment()
    {
        $allclass = Addclass::pluck('name');
        $class = Assignment::
        whereIn('wclass', $allclass)
        ->select(['wclass'])
        ->distinct()
        ->get();

        // ->unique('wclass');
        $uclass = [
            'MATRIC (General, Dars-i Nizami)' => 'MATRIC (General, Dars-i Nizami)',
            'INTERMEDIATE (FA, ICOM, Dars-i Nizami)' => 'INTERMEDIATE (FA, ICOM, Dars-i Nizami)',
            'BACHELOR (BA, B.COM, BLIS, Dars-i Nizami)' => 'BACHELOR (BA, B.COM, BLIS, Dars-i Nizami)',
            'M.A URDU' => 'M.A URDU'
        ];
        return view('front.pages.assignment', compact("class", 'uclass'));
    }
    public function guesspaper()
    {
        $class = addclass::
        where('name', '!=', 'Research Project')
        ->where('name', '!=', 'Teaching Practice')
        ->get();
        return view('front.pages.guesspaper', compact("class"));
    }
    public function results()
    {
        $link = addlink::where('category', 'Result')->get();
        return view('front.pages.results', compact('link'));
    }
    public function thesis()
    {
        $thesis = theses::all();
        $description = addlink::where('category', 'Table Thesis')->get();
        return view('front.pages.thesis', compact("thesis", 'description'));
    }
    public function teaching()
    {
        $thesis = theses::where('course_id', '8607')->paginate();
        $description = addlink::where('category', 'Teaching Practice')->get();
        return view('front.pages.teaching', compact("thesis", 'description'));
    }
    public function research()
    {
        $thesis = theses::where('course_id', '8613')->get();
        $description = addlink::where('category', 'Research Project')->get();
        return view('front.pages.research', compact("thesis", 'description'));
    }
    public function practice()
    {
        return view('front.pages.practice');
    }

    public function videolectures()
    {
        $class = addclass::
        where('name', '!=', 'Research Project')
        ->where('name', '!=', 'Teaching Practice')
        ->get();
        return view('front.pages.video-lectures', compact("class"));
    }
    public function video_lectures()
    {
        $class = addclass::
        where('name', '!=', 'Research Project')
        ->where('name', '!=', 'Teaching Practice')
        ->all();
        $video = video::all();
        return view('backend.pages.video_lectures', compact("video", "class"));
    }
    public function  lessonplan()
    {
        $lesson = lesson::orderBy('course_id')
        ->orderBy('name')
        ->get();
        $description = addlink::where('category', 'LessonPlan')->get();
        return view('front.pages.lessonplan', compact("lesson", 'description'));
    }

    public function compressor()
    {
        $link = addlink::all();
        return view('front.pages.compressor', compact('link'));
    }

    /**
     * Logout user by get route
     */
    public function userLogout()
    {
        Auth::logout();
        return redirect(route('index'));
    }

    public function comments()
    {
        $comments = Comment::with('reply')
        ->orderBy('id', 'desc')
        ->get();
        return view('front.pages.comments', compact([
            'comments'
        ]));
    }
}
