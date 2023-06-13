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
    </ul>
</div>