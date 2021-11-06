<style>
    .d-none{
        display: none !important;
    }
    .reply{
        cursor: pointer;
    }
</style>
<div class="card shadow mt-2 mt-lg-5 p-3">
    <div class="card-header text-center">Comment section</div>
    <div class="commment-container">
        <div class="post-comment">
            <form action="{{ route('add.new.comment') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="username" required class="form-control mb-1 mt-1" placeholder="Please enter your name">
                    <textarea name="comment" id="comment" cols="20" rows="5" class="form-control" placeholder="JOIN THE DISCUSSION" required></textarea>
                    <input type="submit" class="btn btn-success btn-sm mt-2">
                </div>
            </form>
        </div>
        <hr>
        @if(count($comments))
        <div class="row" style="max-height: 800px; overflow: auto;">
        @foreach ($comments as $cmnt)
            <div class="col-lg-1 text-right mt-2"><img src="{{ asset('img/user.jpeg') }}" alt="" style="border-radius: 50%"></div>
            <div class="col-lg-11 text-left">
                <h4 class="text-primary">
                    {{ $cmnt->uname }}
                    {!! ($cmnt->is_admin) ? '<small style="color: red">(By Admin)</small>' : ''!!}

                </h4>
                <span class="">{{ $cmnt->created_at }}</span>

                <p class="mt-2 text-secondary text-justify">
                    <small class="">
                        {{ $cmnt->comment }}
                    </small>
                </p>
                <p class="bold reply" cmt="{{ $cmnt->id }}" form="post-reply-{{ $cmnt->id }}"><i class="fa fa-reply mr-1 mb-2"></i>Reply</p>
                <div class="post-reply post-reply-{{ $cmnt->id }} d-none">
                    <form action="{{ route('add.new.reply') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="username" required class="form-control mb-1 mt-1" placeholder="Please enter your name">
                            <textarea name="reply" id="comment" cols="20" rows="5" class="form-control" placeholder="REPLY THIS DISCUSSION" required></textarea>
                            <input type="hidden" value="{{ $cmnt->id }}" name="cmntid">
                            <input type="submit" class="btn btn-success btn-sm mt-2">
                        </div>
                    </form>
                </div>
                @if(count($cmnt->reply))
                @foreach ($cmnt->reply as $reply)
                <div class="col-lg-1 text-right mt-2"><img src="{{ asset('img/user.jpeg') }}" alt="" style="border-radius: 50%"></div>
                <div class="col-lg-11 text-left">
                    <h4 class="text-primary">
                        {{ $reply->uname }}
                        {!! ($cmnt->is_admin) ? '<small style="color: red">(By Admin)</small>' : ''!!}
                    </h4>
                    <span class="">{{ $reply->created_at }}</span>

                    <p class="mt-2 text-secondary text-justify">
                        <small class="">
                            {{ $reply->reply }}
                        </small>
                    </p>
                </div>
                @endforeach
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<script src="{{ asset('assets/front/js/jquery-2.2.3.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.reply').on('click', function(){
            var form = $(this).attr('form');
            $('.post-reply').addClass('d-none');
            $('.'+form).removeClass('d-none');
        })
    });
</script>
