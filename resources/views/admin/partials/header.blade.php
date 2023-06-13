<header class="header_area">
    <div class="header_inner">
        <ul class="header_left_list">
            <li class="below_mobile">
                <div class="collapse_arrow">
                    <span><i class="lni lni-menu"></i></span>
                </div>
              <a href="#"><img src="{{ asset('themes/admin/media/images/speakpipe-logo.svg') }}" alt="" ></a>
            </li>
            <li class="above_mobile">
                <div class="left_header_widget">
                    <i class="fas fa-paper-plane"></i> Hello Super Admin
                </div>
            </li>
        </ul>
        <ul>
            <li>
                <div class="dropdown lang_dropdown">
                    <button class="btn">
                    <span class="flag-icon flag-icon-us mr_5"></span>
                    </button>
                    <div class="dropdown_menu ">
                        <ul>
                            <li><a href="#"><span class="flag-icon flag-icon-us mr_5"></span>  English</a></li>
                            <li><a href="#"><span class="flag-icon flag-icon-kr mr_5"></span> Korean </a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn">
                        <i class='bx bx-bell' ></i>
                    </button>
                </div>
            </li>
            <li>
                <div class="dropdown">
                    <button class="btn">
                        <img src="{{ asset('themes/admin/media/images/author.png') }}" alt="">
                    </button>
                    <div class="dropdown_menu">
                        <ul>
                            <li><a href="#"><i class='bx bx-user'></i> Profile</a></li>
                            <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                            <li>
                                <a role="button" onclick="document.getElementById('logoutForm').submit()" style="cursor: pointer;"><i class="ti-lock"></i> Logout</a>
                                <form id="logoutForm" class="" action="{{ route('logout_admin') }}" method="post">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>