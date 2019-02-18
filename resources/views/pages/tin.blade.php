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
</div>

@if(Auth::user())
<form action="binhluan/{{$tintuc->id}}" method="post">
    <input name="_token" type="hidden" value="{{csrf_token()}}">
        <textarea name="noidung">
        </textarea>
        <button type="submit">
            Bình luận
        </button>
    </input>
</form>
@endif
@endsection
