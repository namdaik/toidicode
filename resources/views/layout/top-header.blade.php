 <div class="top-header">
            <div class="container">
                <div class="vce-wrap-left">
                    <ul id="vce_top_navigation_menu" class="top-nav-menu">
                        @if(!Auth::user())
                        <li class="menu-item">
                            <a href="dangnhap" style="text-decoration: none;">Đăng nhập</a>
                        </li>
                        <li class="menu-item">
                            <a href="dangky" style="text-decoration: none;">Liên Hệ</a>
                        </li>
                        @else
                        <li class="menu-item">
                           <p style="text-decoration: none;"> {{Auth::user()->name}}</p>
                        </li>
                        <li class="menu-item">
                            <a href="dangxuat" style="text-decoration: none;">Đăng xuất</a>
                        </li>
                        
                        @endif

                    </ul>
                </div>
            </div>
        </div>