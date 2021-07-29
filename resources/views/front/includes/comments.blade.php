<section class="u_comment">
  <div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                     Comment Srction</h3>
                <span class="label label-info">
                  </span>
            </div>
            <div class="panel-body">
                <ul class="list-group">

                    <li class="list-group-item">
                        <div class="row">

             <form action="{{URL::TO('')}}/addcomment" method="POST">
               @csrf
                    <div class="form-group">
                      <textarea type="text" name="comment" class="form-control" placeholder="Add Your Comment Here ..." required></textarea> 


                    </div>

                    <div class="form-group ">

                     <input type="submit" name="" value="Comment">
                   </div>
               </form>
                            
                        </div>
                    </li>
                   <!-- li 1 -->
@foreach($comment as $comments)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://techzonesit.com/">{{$comments->uname}}</a>
                                    <div class="mic-info">
                                        Date: <a href="#">{{$comments->created_at}}</a> 
                                    </div>
                                </div>
                                <a href="http://techzonesit.com/">
                                <div class="comment-text">
                                <a href="http://techzonesit.com/">   Comment:</a> {{$comments->comment}}
                                </div></a>
                                <div class="col-xs-10 col-md-11">
                                @foreach($reply as $replys)
                                @if($comments->id == $replys->cmntid)
                                 <div>
                                    <a href="http://techzonesit.com/">{{$replys->uname}}</a>
                                    <div class="mic-info">
                                  Date: <a href="http://techzonesit.com/">{{$replys->created_at}}</a> 
                                    </div>
                                </div>
                                <div class="comment-text">
                                   <a href="http://techzonesit.com/"> Reply:</a> {{$replys->reply}}
                                </div>
                                @endif
                                @endforeach
                              </div>
                                <div class="action">
                                   
                                   <form action="{{URL::TO('')}}/addreply" method="POST">
               @csrf

               <input type="hidden" name="cmntid" value="{{$comments->id}}">
                    <div class="form-group">
                      <textarea type="text" name="reply" class="form-control" placeholder="Add Your Reply Here ..." required></textarea> 


                    </div>

                    <div class="form-group ">

                     <input type="submit" name="" value="Reply">
                   </div>
               </form>
                                    
                                </div>
                            </div>
                        </div>
                    </li>

@endforeach
                   <!-- end -->
                </ul>
               
            </div>
        </div>
    </div>
</div>


</section>
