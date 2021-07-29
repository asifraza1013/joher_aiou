<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Book;
use App\Assignment;
use App\Theses;
use App\Guess;
use App\Addlink;
use App\Banner;
use App\Notification;
use App\Addclass;
use App\Video;
use App\Description;
use App\Lesson;
use App\Comment;
use App\Reply;
use Artisan;

use Auth;

class backend extends Controller
{
   public function dashboard(){
     $class = addclass::all();
     if(Auth::user()->role == 'admin')
     {
   	return view('backend.pages.dashboard',compact('class'));
   }
  
  
   }
   public function book(){
   	$book = book::all();
    $class = addclass::all();
     if(Auth::user()->role == 'admin')
     {
   	return view('backend.pages.book',compact('book','class'));}
   	
   }
   public function assignment(){
      $assignment = assignment::all();
       $class = addclass::all();
        if(Auth::user()->role == 'admin')
     {
   	return view('backend.pages.assignment',compact('assignment','class'));}
   }
   public function thesis(){
      $thesis = theses::all();
       $class = addclass::all();
        if(Auth::user()->role == 'admin')
     {
   	return view('backend.pages.thesis',compact('thesis','class'));}
   }
   public function guess(){
      $guess = guess::all();
       $class = addclass::all();
        if(Auth::user()->role == 'admin')
     {
   	return view('backend.pages.guess',compact('guess','class'));}
   }

   public function links(){
      $addlink = addlink::all();
       if(Auth::user()->role == 'admin')
     {
      return view('backend.pages.links',compact('addlink'));}
   }
    public function banners(){
      $banners = banner::all();
       if(Auth::user()->role == 'admin')
     {
      return view('backend.pages.banners',compact('banners'));}
   }
   
   public function notification(){
      $notification = notification::all();
       if(Auth::user()->role == 'admin')
     {
      return view('backend.pages.notifications',compact('notification'));}
   }
   public function class(){
      $class = addclass::all();
       if(Auth::user()->role == 'admin')
     {
      return view('backend.pages.class',compact('class'));}
   }
    public function description(){
      $description = description::all();
       if(Auth::user()->role == 'admin')
     {
      return view('backend.pages.description',compact('description'));}
   }



   /////////////////////////////////////////////////////////////////////////
   public function addbook(Request $request){

 

     

          $book = new book();
    $book->wclass=$request->wclass;
    $book->course_id=$request->course_id;
    $book->name=$request->name;
    $book->category=$request->category;
   
        
         $book->save();

 $assignment = new assignment();
    $assignment->wclass=$request->wclass;
    $assignment->course_id=$request->course_id;
    $assignment->name=$request->name;
     
         $assignment->save();
         
         $guess = new guess();
    $guess->wclass=$request->wclass;
    $guess->course_id=$request->course_id;
    $guess->name=$request->name;
$guess->save();


         return redirect()->back();
   }




   
public function deletebook($id){

$book = book::find($id);
$book->delete();
return redirect()->back();

}

public function deletebooks($id){

$book = book::find($id);
$book->pdffile = 'null';

$book->update();
return redirect()->back();

}

public function deletebooks1($id){

$book = book::find($id);
$book->pdffile1 = 'null';

$book->update();
return redirect()->back();

}

public function deletelink1($id){

$book = book::find($id);
$book->link1 = 'null';

$book->update();
return redirect()->back();

}
public function deletelink2($id){

$book = book::find($id);
$book->link2 = 'null';

$book->update();
return redirect()->back();

}






public function editbook(Request $request){
  
   $id= $request->id;

$book = book::find($id);

if ($request->hasfile('pdffile')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $book->pdffile=$request->pdffile->move($destination, $file);

         $book->update();
         
}

if ($request->hasfile('pdffile1')) {

 $validatedData =  Validator::make($request->all(),[
        
          'pdffile1' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }


 $file1 = time().'.'.$request->pdffile1->getClientOriginalExtension();
        $destination="public/file/" ;  
         $book->pdffile1=$request->pdffile1->move($destination, $file1);

         $book->update();
        
}

$book->link1=$request->link1;
$book->link2=$request->link2;


$book->wclass=$request->wclass;
$book->course_id=$request->course_id;
      $book->name=$request->name;
      $book->category=$request->category;
        $book->update();
         return redirect()->back();
      
}

// update book 1


 public function updatebook1(Request $request){
  
   $id= $request->id;

$book = book::find($id);

if ($request->hasfile('pdffile')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $book->pdffile=$request->pdffile->move($destination, $file);

         $book->update();
         return redirect()->back;
         
}
}


// update book 2


 public function updatebook2(Request $request){
  
   $id= $request->id;

$book = book::find($id);

if ($request->hasfile('pdffile')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->pdffile1->getClientOriginalExtension();
        $destination="public/file/" ;  
         $book->pdffile1=$request->pdffile1->move($destination, $file);

         $book->update();
         return redirect()->back;
         
}
}





public function editbook1(Request $request){
  
   $id= $request->id;

$book = book::find($id);

    
      $file = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $book->pdffile=$request->pdffile->move($destination, $file);

         $book->update();
         return redirect()->back();
}

////////////////////////////////////////////////////
// add assignment

public function addassignment(Request $request){


     

    $assignment = new assignment();
    $assignment->wclass=$request->wclass;
    $assignment->course_id=$request->course_id;
    $assignment->name=$request->name;
     
         $assignment->save();
         return redirect()->back();
    
   }
public function deleteassignment($id){

$assignment = assignment::find($id);
$assignment->delete();
return redirect()->back();

}

public function editassignment(Request $request){

   $id= $request->id;

$assignment = assignment::find($id);


if ($request->hasfile('a1')) {
 $validatedData =  Validator::make($request->all(),[
        
          'a1' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->a1->getClientOriginalExtension();
        $destination="public/file/" ;  
         $assignment->a1=$request->a1->move($destination, $file);

         $assignment->update();
         
}


if ($request->hasfile('a2')) {
 $validatedData =  Validator::make($request->all(),[
        
          'a2' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->a2->getClientOriginalExtension();
        $destination="public/file/" ;  
         $assignment->a2=$request->a2->move($destination, $file);

         $assignment->update();
         
}


if ($request->hasfile('a3')) {
 $validatedData =  Validator::make($request->all(),[
        
          'a3' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->a3->getClientOriginalExtension();
        $destination="public/file/" ;  
         $assignment->a3=$request->a3->move($destination, $file);

         $assignment->update();
         
}

if ($request->hasfile('a4')) {
 $validatedData =  Validator::make($request->all(),[
        
          'a4' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->a4->getClientOriginalExtension();
        $destination="public/file/" ;  
         $assignment->a4=$request->a4->move($destination, $file);

         $assignment->update();
         
}





$assignment->link1=$request->link1;
$assignment->link2=$request->link2;
$assignment->link3=$request->link3;
$assignment->link4=$request->link4;


 $assignment->wclass=$request->wclass;
    $assignment->course_id=$request->course_id;
    $assignment->name=$request->name;
   
  
          $assignment->update();
         return redirect()->back();
}

///////////////////////////////////////////////////////////////////////////////////////////////////////



public function deletea1($id){

$assignment = assignment::find($id);
$assignment->a1 = 'null' ;
$assignment->update();
return redirect()->back();

}


public function deletea2($id){

$assignment = assignment::find($id);
$assignment->a2 = 'null' ;
$assignment->update();
return redirect()->back();

}


public function deletea3($id){

$assignment = assignment::find($id);
$assignment->a3 = 'null' ;
$assignment->update();
return redirect()->back();

}

public function deletea4($id){

$assignment = assignment::find($id);
$assignment->a4 = 'null' ;
$assignment->update();
return redirect()->back();

}


public function deletel1($id){

$assignment = assignment::find($id);
$assignment->link1 = 'null' ;
$assignment->update();
return redirect()->back();

}

public function deletel2($id){

$assignment = assignment::find($id);
$assignment->link2 = 'null' ;
$assignment->update();
return redirect()->back();

}


public function deletel3($id){

$assignment = assignment::find($id);
$assignment->link3 = 'null' ;
$assignment->update();
return redirect()->back();

}

public function deletel4($id){

$assignment = assignment::find($id);
$assignment->link4 = 'null' ;
$assignment->update();
return redirect()->back();

}







////////////////////////////////////////////////////////////////////////////////////

public function addthesis(Request $request){


     $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'mimes:pdf|max:10000',
           
       

       
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

    $thesis = new theses();
    $thesis->wclass=$request->wclass;
    $thesis->course_id=$request->course_id;
    $thesis->name=$request->name;
   
   
 
         $thesis->save();
         return redirect()->back();
    
   }
public function deletethesis($id){

$thesis = theses::find($id);
$thesis->delete();
return redirect()->back();

}
public function deletethesisfile($id){
    $thesis = theses::find($id);
   $thesis->pdffile = 'null';

$thesis->update();
return redirect()->back();

   
    
    
}

public function deletethesislink($id){
    $thesis = theses::find($id);
   $thesis->link1 = 'null';

$thesis->update();
return redirect()->back();

   
    
    
}




public function editthesis(Request $request){

   $id= $request->id;

$thesis = theses::find($id);

if ($request->hasfile('pdffile')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $thesis->pdffile=$request->pdffile->move($destination, $file);

         $thesis->update();
         
}




$thesis->link1=$request->link1;

 $thesis->wclass=$request->wclass;
    $thesis->course_id=$request->course_id;
    $thesis->name=$request->name;
   
  
          $thesis->update();
         return redirect()->back();
}

////////////////////////////////////////////////////////////////////////////////////

public function addguess(Request $request){


     $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'mimes:pdf|max:10000',
           
       

       
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

    $guess = new guess();
    $guess->wclass=$request->wclass;
    $guess->course_id=$request->course_id;
    $guess->name=$request->name;
   
    $pdffile = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $guess->pdffile=$request->pdffile->move($destination, $pdffile);

 
         $guess->save();
         return redirect()->back();
    
   }
public function deleteguess($id){

$guess = guess::find($id);
$guess->delete();
return redirect()->back();

}

public function deletepdffile($id){

$book = guess::find($id);
$book->pdffile = 'null';

$book->update();
return redirect()->back();

}

public function deletepdffile1($id){

$book = guess::find($id);
$book->pdffile1 = 'null';

$book->update();
return redirect()->back();

}

public function deletepdflink($id){

$book = guess::find($id);
$book->link = 'null';

$book->update();
return redirect()->back();

}
public function deletepdflink1($id){

$book = guess::find($id);
$book->link1 = 'null';

$book->update();
return redirect()->back();

}










public function editguess(Request $request){

   $id= $request->id;

$guess = guess::find($id);

if ($request->hasfile('pdffile')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'required|mimes:pdf,jpeg,png,jpg|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $guess->pdffile=$request->pdffile->move($destination, $file);

         $guess->update();
         
}



if ($request->hasfile('pdffile1')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile1' =>  'required|mimes:pdf,jpeg,png,jpg|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

 $file = time().'.'.$request->pdffile1->getClientOriginalExtension();
        $destination="public/file/" ;  
         $guess->pdffile1=$request->pdffile1->move($destination, $file);

         $guess->update();
         
}



 $guess->link=$request->link;
 $guess->link1=$request->link1;
 $guess->wclass=$request->wclass;
    $guess->course_id=$request->course_id;
    $guess->name=$request->name;
   
  
          $guess->update();
         return redirect()->back();
}



// ////////////////////////////////////////////
public function addlink(Request $request){

$link= new addlink();

$link->description=$request->description;
$link->link=$request->link;
$link->link1=$request->link1;
$link->category=$request->category;
$link->save();
return redirect()->back();
         
}
   public function deletelink($id){

      $addlink= addlink::find($id);
      $addlink->delete();
      return redirect()->back();
         }

         public function editlink(Request $request){

            $id=$request->id;
            $link= addlink::find($id);
            $link->description=$request->description;
            $link->link=$request->link;
            $link->link1=$request->link1;
            $link->category=$request->category;
            $link->update();
            return redirect()->back();
         }

         public function addbanner(Request $request){


     $validatedData =  Validator::make($request->all(),[
         'img' => 'dimensions:min_height=400,max_height=650'
       
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }
          

             $banner= new banner();
             $banner->title=$request->title;
       $img = time().'.'.$request->img->getClientOriginalExtension();
        $destination="public/img/" ;  
         $banner->img=$request->img->move($destination, $img);
         $banner->save();
         return redirect()->back();

         }
         public function deletebanner($id){

            $banner= banner::find($id);
            $banner->delete();
             return redirect()->back();
         }
         public function editbanner(Request $request){

            $id=$request->id;
            $banner=  banner::find($id);
            $banner->title=$request->title;
       $img = time().'.'.$request->img->getClientOriginalExtension();
        $destination="public/img/" ;  
         $banner->img=$request->img->move($destination, $img);
         $banner->update();
         return redirect()->back();

         }
         public function addnotification(Request $request){

            $noti= new notification();

            $noti->noti= $request->noti;
             $noti->name= $request->name;
              $noti->date= $request->date;
              $noti->save();
         return redirect()->back();

         }
         public function deletenotifications($id){
            $noti=  notification::find($id);

            $noti->delete();
         return redirect()->back();
         }

         public function editnotifications(Request $request){
            $id = $request->id;
            $noti=  notification::find($id);

            $noti->noti= $request->noti;
             $noti->name= $request->name;
              $noti->date= $request->date;
              $noti->update();
         return redirect()->back();

         }
////////////////////////////////////////////////////////////////
         public function addclass(Request $request){

          $class= new addclass();
          $class->name= $request->name;

              $class->save();
         return redirect()->back();

         }
        public function  deleteclass($id){

          $class=  addclass::find($id);
          $class->delete();
         return redirect()->back();

        }
        public function editclass(Request $request){

          $id= $request->id;
          $class=  addclass::find($id);
          $class->name= $request->name;

              $class->update();
         return redirect()->back();


        }

        ///////////////////////////////////////////////////////

         public function adddescription(Request $request){

          $description= new description();
          $description->description= $request->description;

           $description->category= $request->category;

              $description->save();
         return redirect()->back();

         }
        public function  deletedescription($id){

          $description=  description::find($id);
          $description->delete();
         return redirect()->back();

        }
        public function editdescription(Request $request){

          $id= $request->id;
          $description=  description::find($id);
          $description->description= $request->description;
           $description->category= $request->category;

              $description->update();
         return redirect()->back();


        }
        ///////////////////////////////////////////////////////////////

        public function alldata($id){

          $class= addclass::find($id);
          $book= book::all();
          $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
             $description = addlink::all();
          return view('front.pages.all-books',compact('class','book','comment','reply','description'));



        }
        public function alladata($id){
          
          $class= addclass::find($id);
          $assignment= assignment::all();
          $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
             $description = addlink::all();
          return view('front.pages.all-assignments',compact('class','assignment','comment','reply','description'));
            }
             public function alltdata($id){

          $class= addclass::find($id);
          $thesis= theses::all();
          $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
            $description = addlink::all();

          return view('front.pages.all-thesis',compact('class','thesis','comment','reply','description'));
            }
            public function allgdata($id){

          $class= addclass::find($id);
          $guess= guess::all();
          $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
            $description = addlink::all();

          return view('front.pages.all-guess',compact('class','guess','comment','reply','description'));
            }
            public function allvdata($id){

          $class= addclass::find($id);
          $book= video::all();
          $comment = comment::all();
         $comment= comment::orderBy('id', 'desc')->paginate(20000000);
          $reply = reply::all();
           $reply= reply::orderBy('id', 'desc')->paginate(20000000);
          $description = addlink::all();
          return view('front.pages.all-lectures',compact('class','book','comment','reply','description'));
            }

            public function addvlink(Request $request){

              $video= new video();
              $video->name = $request->name;
               $video->course_id = $request->course_id;
                $video->class = $request->class;
                 $video->link = $request->link;
                  $video->save();
                  return redirect()->back();

            }
            
            public function deletevideos($id){

               $video=  video::find($id);
               $video->delete();
               return redirect()->back();

            }

             public function editvideos(Request $request){
              $id= $request->id;


              $video=  video::find($id);
              $video->name = $request->name;
               $video->course_id = $request->course_id;
                $video->class = $request->class;
                 $video->link = $request->link;
                  $video->update();
                  return redirect()->back();

            }
            
          ////////////////////////////////////////////////////////////////////////////////////



  public function addlesson(Request $request){


    

    $lesson = new lesson();
    $lesson->wclass=$request->wclass;
    $lesson->course_id=$request->course_id;
    $lesson->name=$request->name;
   
    // $file = time().'.'.$request->pdffile->getClientOriginalExtension();
    //     $destination="public/file/" ;  
    //      $lesson->pdffile=$request->pdffile->move($destination, $file);

  

        
         $lesson->save();
         return redirect()->back();
    
   }
   
   
   public function deletelesson1($id){

$lesson = lesson::find($id);
$lesson->pdffile = 'null' ;
$lesson->update();
return redirect()->back();

}

 public function deletelessonl1($id){

$lesson = lesson::find($id);
$lesson->link = 'null' ;
$lesson->update();
return redirect()->back();

}
   
   
   
   
   
public function deletelesson($id){

$lesson = lesson::find($id);
$lesson->delete();
return redirect()->back();

}

public function editlesson(Request $request){

   $id= $request->id;

$lesson = lesson::find($id);

if ($request->hasfile('pdffile')) {
 $validatedData =  Validator::make($request->all(),[
        
          'pdffile' =>  'required|mimes:pdf|max:10000',
                  
    ]);
if ($validatedData->fails()) {
            return redirect()->back()
                        ->withErrors($validatedData)
                        ->withInput();
        }

  $file = time().'.'.$request->pdffile->getClientOriginalExtension();
        $destination="public/file/" ;  
         $lesson->pdffile=$request->pdffile->move($destination, $file);
}




$lesson->link=$request->link;

$lesson->wclass=$request->wclass;
$lesson->course_id=$request->course_id;
      $lesson->name=$request->name;
     
     

         $lesson->update();
         return redirect()->back();
}

 public function lesson()
{
  $lesson = lesson::all();

  $class= addclass::all();
  return view('backend.pages.lesson',compact("lesson","class"));
}
////////////////////////////////////////////////////comment/////////////////////////


public function addcomment(Request $request){

$comment = new comment();

if (!empty(Auth::user())) {

  $name = Auth::user()->name ;
  $comment->uname = $name ;
   $comment->comment = $request->comment ;

   $comment->save();

return redirect()->back();
}

 session()->flash('msg', 'Log In To Comment.');
    return redirect()->back();
}

public function addreply(Request $request){

$reply = new reply();


if (!empty(Auth::user())) {

  $name = Auth::user()->name ;

  $reply->uname = $name ;
   $reply->reply = $request->reply ;
   $reply->cmntid = $request->cmntid ;

   // print_r($request->cmntid);
   // die;

   $reply->save();

return redirect()->back();
}

 session()->flash('msg', 'Log In To Reply.');
    return redirect()->back();
}






















  

}











