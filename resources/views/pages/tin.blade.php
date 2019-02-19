@extends('layout.index')
@section('content')
<div class="vce-main-content" id="primary">
    <main class="main-box main-box-single" id="main">
        <article class="vce-single">
            <header class="entry-header">
                <span class="meta-category">
                    DANH MỤC:
                    <a class="category-55" href="https://toidicode.com/hoc-laravel">
                        {{$tintuc->loaitin->ten}}
                    </a>
                </span>
                <h1 class="entry-title">
                    {{$tintuc->tieude}}
                </h1>
                <hr>
                </hr>
            </header>
            <div class="entry-content">
                <img class="text-center" src="upload/tintuc/{{$tintuc->hinh}}">
                    {!!$tintuc->noidung!!}
                </img>
            </div>
        </article>
    </main>
    <div class="comments-holder main-box">
    <h3 class="comment-title main-box-title">
        Bình Luận
    </h3>
    <div class="main-box-inside content-inside">
        <ul class="comment-list">
            @foreach($tintuc->comment as $cm)
            <li class="comment even thread-even depth-1 parent" id="comment-31">
                <article class="comment-body" id="div-comment-24">
                    <footer class="comment-meta">
                        <div class="comment-author vcard">
                            <img alt="" class="avatar avatar-75wp-user-avatar wp-user-avatar-75 alignnone photo avatar-default" height="75" src="https://toidicode.com/upload/images/avatar-toidicode.png" width="75">
                                <b class="fn">
                                    <a class="url" href="#" rel="external nofollow">
                                        {{$cm->user}}
                                    </a>
                                </b>
                                <span class="says">
                                    says:
                                </span>
                            </img>
                        </div>
                        <div class="comment-metadata">
                            <a href="#">
                                <time>
                                    2017-06-20 05:06:37
                                </time>
                            </a>
                        </div>
                    </footer>
                    <div class="comment-content">
                        <p>
                            {!!$cm->noidung!!}
                        </p>
                    </div>
                    <div class="reply">
                        <a class="comment-reply-link" data-parent="31" href="#" rel="nofollow">
                            Reply
                        </a>
                    </div>
                </article>
            </li>
            @endforeach
        </ul>
        <!-- .children -->
    </div>
</div>
@if(Auth::user())
<div id="respond" class="comment-respond">
    <div id="content-f"><h3 id="reply-title" class="comment-reply-title">Để Lại Bình Luận <small><a rel="nofollow" class="cancel-comment-reply-link" style="display:none;float:right" onclick="action.hideForm()">X</a></small></h3>
        <form action="binhluan/{{$tintuc->id}}" method="post" class="comment-form anti-spam-form-processed">
            <input name="_token" type="hidden" value="{{csrf_token()}}">
            <p class="comment-form-comment"><label for="comment">Comment <span class="required"> *</span></label><textarea id="commentt" name="noidung" cols="45" rows="8""></textarea>
        <p class="form-submit"><input name="submit" type="submit" id="send-comment" class="submit" value="Post Comment"></p>
    </form><p></p></div></div>

@endif

</div>

@endsection
