<header class="main-header" id="header">
    @include('layout.top-header')
    <div class="container header-1-wrapper header-main-area">
        <div class="vce-res-nav">
            <a class="vce-responsive-nav" href="javascript:void(0)">
                <i class="fa fa-bars" style="color:#3d454c">
                </i>
            </a>
        </div>
        <div class="site-branding">
            <h1 class="site-title" style="">
                <a class="has-logo" href="/toidicode" title="Toidicode">
                    <img alt="Toidicode" src="https://toidicode.com/upload/images/logo.png"/>
                </a>
            </h1>
            <span class="site-description">
                BASIC TO ADVANCE
            </span>
        </div>
    </div>
    <div class="header-bottom-wrapper">
        <div class="container">
            <nav class="main-navigation" id="site-navigation" role="navigation">
                <ul class="nav-menu" id="vce_main_navigation_menu">
                    @foreach($theloai as $tl)
                    <li class="menu-item menu-item-type-custom menu-item-has-children">
                        <a href="theloai/{{$tl->id}}" style="">
                            {{$tl->ten}}
                        </a>
                        <ul class="sub-menu">
                            @foreach($tl->loaitin as $lt)
                            <li class="menu-item menu-item-type-taxonomy">
                                <a href="loaitin/{{$lt->id}}" style="">
                                    {{$lt->ten}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                    <li class="search-header-wrap">
                        <a class="search_header" href="javascript:void(0)">
                            <i class="fa fa-search">
                            </i>
                        </a>
                        <ul class="search-header-form-ul" style="background: white">
                            <li>
                                <form action="#tim-kiem.html" class="search-header-form" method="get">
                                    <input class="search-input" name="q" onblur="(this.value == '') && (this.value = 'Nhập nội dung tìm kiếm ....')" onfocus="(this.value == 'Nhập nội dung tìm kiếm ....') && (this.value = '')" placeholder="Nhập nội dung tìm kiếm ...." size="20" type="text"/>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>