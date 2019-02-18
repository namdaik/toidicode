@extends('layout.index')
@section('content') 

<div id="primary" class="vce-main-content">
            <div id="main-box-3" class="main-box vce-border-top ">
                <h3 class="main-box-title cat-48">Bài Mới</h3>
                <div class="main-box-inside ">
                    <div class="vce-loop-wrap" >
                    	@foreach($tintuc as $tin)
                        
                       <article class="vce-post vce-lay-b">
                            <div class="meta-image">
                                <a href="{{$tin->tieudekhongdau}}/{{$tin->id}}" title="Triển khai singleton pattern tr&ecirc;n Javacript">
                                    <img width="375" height="195" src="upload/tintuc/{{$tin->hinh}}" class="attachment-vce-lay-b size-vce-lay-b wp-post-image" alt="{{$tin->tieude}}" sizes="(max-width: 375px) 100vw, 375px" />
                                </a>
                            </div>
                            <header class="entry-header">
                                <span class="meta-category">
                                    DANH MỤC: <a href="#" class="category-55">{{$tin->loaitin->theloai->ten}}</a>
                                </span>
                                <h2 class="entry-title"><a href="{{$tin->tieudekhongdau}}/{{$tin->id}}" title="{{$tin->tieude}}">{{$tin->tieude}}</a></h2>
                                <div class="entry-meta">
                                    <div class="meta-item date" style="display: block;">
                                        <span class="updated" style="font-size: ">
                                            Đăng Ng&agrave;y: {{$tin->created_at}} Bởi: Vũ Thanh T&agrave;i
                                        </span>
                                    </div>
                                </div>
                            </header>
                            <div class="entry-content">
                                <p>{{$tin->TomTat}}</p>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    {{$tintuc->links()}}                    
                </div>
            </div>
        </div>
@endsection