@extends('layout.index')
@section('content') 
        <div id="primary" class="vce-main-content">

            <div class="main-box">

                <div class="main-box-head">
                    <h1 class="main-box-title">Danh Mục: {{$theloai1->Ten}}</h1>
                    
                </div>

                <div class="main-box-inside">
                    <p style="margin: 10px 0;text-align: center;">
                        <!-- bai-viet -->
                        <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-8768260344279113"
                        data-ad-slot="2157340583"
                        data-ad-format="auto"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </p>
                    <style type="text/css" media="screen">
                        .vce-loop-wrap{
                            list-style: none;
                            margin: 0;
                            padding: 0;
                            padding-bottom: 50px;
                        }
                        .vce-loop-wrap li{
                            padding: 16px 0 16px 15px;
                            border-top:1px solid #dddddd;
                            border-left:1px solid #dddddd;
                            border-right:1px solid #dddddd;
                        }
                         .vce-loop-wrap li:hover{
                            background-color: #f5f5f5;
                         }
                        .vce-loop-wrap li:first-child{
                            background-color: #3d454c;
                            color: #fff;
                            font-weight: bold;
                        }
                        .vce-loop-wrap li:last-child{
                            border-bottom:1px solid #dddddd;
                        }
                    </style>
                    <ul class="vce-loop-wrap" >
                                                    <li>Danh Sách  loại tin tin thể loại {{$theloai1->Ten}}</li>
                                                    @foreach($loaitin as $lt)
                                                            <li><a href="loaitin/{{$lt->id}}">{{$lt->Ten}}</a></li>
                                                    @endforeach
                                                                        </ul>
                </div>
                <div class="tip-f">Hãy tham gia group facebook để cùng giao lưu chia sẻ kiến thức! <a target="_blank" href="https://www.facebook.com/groups/toidicodegroup/">Tham Gia</a></div>
                <div id="comments" class="comments-main">
                </div>
                <div id="respond" class="comment-respond">
                </div>
                <script type="text/javascript">
                    var config = {
                        url: 'https://toidicode.com/',
                        id: 14,
                        type: 'cate',
                        token: '91391abc9b49175ead728d8f1e73c72a'
                    };
                </script>
                <script src="https://toidicode.com/public/ckeditor-basic/ckeditor.js?v=0.1" type="text/javascript" charset="utf-8"></script>
                <script src="https://toidicode.com/public/ajax/comment-cate.js?v=0.4" type="text/javascript" charset="utf-8"></script>
    </div>
</div>

@endsection