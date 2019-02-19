 <div class="top-header">
            <div class="container">
                <div class="vce-wrap-left">
                    <ul id="vce_top_navigation_menu" class="top-nav-menu">
                        @if(!Auth::user())
                        <li class="menu-item">
                            <a href="dangnhap" style="text-decoration: none;">Đăng nhập</a>
                        </li>
                        @else
                        <li class="menu-item">
                           <a href="#" style="text-decoration: none;"> {{Auth::user()->name}}</a>
                        </li>
                         <li class="menu-item">
                           <a href="/toidicode/admin/theloai/danhsach" style="text-decoration: none;">Quản trị</a>
                        </li>
                        <li class="menu-item">
                            <a href="dangxuat" style="text-decoration: none;">Đăng xuất</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>