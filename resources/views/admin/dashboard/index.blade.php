@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col_md_12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Dashboard </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col_md_6 col_lg_3 pr_7_half">
            <div class="card info_bg">
                <div class="card-body dashboard_card">
                    <div class="inner color_white">
                        <div class="text">
                            <h2>0</h2>
                            <p>TOTAL CUSTOMERS</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card warning_bg">
                <div class="card-body dashboard_card">
                    <div class="inner color_white">
                        <div class="text">
                            <h2>0</h2>
                            <p>TOTAL PLANS</p>
                        </div>
                        <div class="icon">
                            <i class="far fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card secondary_bg">
                <div class="card-body dashboard_card">
                    <div class="inner color_white">
                        <div class="text">
                            <h2>0</h2>
                            <p>FREE USERS</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half">
            <div class="card blue_bg">
                <div class="card-body dashboard_card">
                    <div class="inner color_white">
                        <div class="text">
                            <h2>0</h2>
                            <p>PREMIUM USER</p>
                        </div>
                        <div class="icon">
                            <i class="lni lni-cart-full"></i>
                            <!-- <i class="fe fe-trending-up text-white mb-5 "></i> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col_md_6 col_lg_3 pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_card">
                    <div class="inner">
                        <div class="text">
                            <p>New User</p>
                            <p class="color_info"><i class="lni lni-users"></i></p>
                            <p>Monthly users</p>
                        </div>
                        <div class="icon">
                            <h2>0</h2>
                            <p>0%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_card">
                    <div class="inner">
                        <div class="text">
                            <p>Total Tax</p>
                            <p class="color_warning"><i class="fas fa-cube"></i></p>
                            <p>Monthly Income</p>
                        </div>
                        <div class="icon">
                            <h2>$0</h2>
                            <p>$0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_card">
                    <div class="inner">
                        <div class="text">
                            <p>Total Profit</p>
                            <p class="color_success"><i class="lni lni-bar-chart"></i></p>
                            <p>Monthly Profit</p>
                        </div>
                        <div class="icon">
                            <h2>$0</h2>
                            <p>$0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_card">
                    <div class="inner">
                        <div class="text">
                            <p>Total Sales</p>
                            <p class="color_blue"><i class="lni lni-cart-full"></i></p>
                            <p>Monthly Sales</p>
                        </div>
                        <div class="icon">
                            <h2>$0</h2>
                            <p>$0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col_md_6 col_lg_3 pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_info"><i class="fab fa-firefox-browser"></i></p>
                        <h3>Today Visitors</h3>
                        <h2>0</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_warning"><i class="fas fa-dollar-sign"></i></p>
                        <h3>Yesterday Visitors</h3>
                        <h2>0</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_warning"><i class="far fa-comment"></i></p>
                        <h3>Total Space</h3>
                        <h2>80G</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_blue"><i class="fas fa-chart-pie"></i></p>
                        <h3>Used Space</h3>
                        <h2>0G</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('additionalJS')

@stop
