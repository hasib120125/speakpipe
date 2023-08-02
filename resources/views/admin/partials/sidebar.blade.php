<div class="navbar">
    <div class="brand">
        <div class="collapse_arrow">
            <span><i class="lni lni-menu"></i></span>
        </div>
        <a href="{{ route('admin_dashboard') }}">
            <img src="{{ asset('themes/admin/media/images/speakpipe-logo.svg') }}" alt="" >
        </a>  
    </div>
    <ul class="left_nav_list">
        <li>
            <div  data-toggle="accordion" data-target="#Customers"  class="left_f_list  active">
                <a href="#"><i class="bx bx-home-circle"></i><span>Customers</span></a>
            </div>
            <ul class="sub_accordion first_level" id="Customers" >
                <li><a href="{{ route('admin_customer_list') }}">Customer List</a></li>
            </ul>
        </li>
        <li>
            <div  data-toggle="accordion" data-target="#Banners"  class="left_f_list  active">
                <a href="#"><i class="bx bx-home-circle"></i><span>Banner Manager</span></a>
            </div>
            <ul class="sub_accordion first_level" id="Banners" >
                <li><a href="{{ route('admin_section_one_banner') }}">Section One Banner</a></li>
                <li><a href="{{ route('admin_section_two_banner') }}">Section Two Banner</a></li>
                <li><a href="{{ route('admin_section_three_banner') }}">Section Three Banner</a></li>
                <li><a href="{{ route('admin_section_four_banner') }}">Section Four Banner</a></li>
            </ul>
        </li>
    </ul>
</div>