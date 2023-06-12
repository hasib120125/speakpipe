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
                            <h2>23,536</h2>
                            <p>TOTAL ORDERS</p>
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
                            <h2>23,536</h2>
                            <p>TOTAL CUSTOMERS</p>
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
                            <h2>23,536</h2>
                            <p>PENDING REVENUE</p>
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
                            <h2>23,536</h2>
                            <p>TOTAL REVENUE</p>
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
                            <h2>3,672</h2>
                            <p>50%</p>
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
                            <h2>$3,602</h2>
                            <p>$7,893</p>
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
                            <h2>$3,072</h2>
                            <p>$7,893</p>
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
                            <h2>$3,672</h2>
                            <p>$7,893</p>
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
                        <h3>Total Visit</h3>
                        <h2>834</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_warning"><i class="fas fa-dollar-sign"></i></p>
                        <h3>Cost per Click</h3>
                        <h2>$358796</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half pr_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_warning"><i class="far fa-comment"></i></p>
                        <h3>Investment</h3>
                        <h2>80%</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 col_lg_3 pl_7_half">
            <div class="card ">
                <div class="card-body dashboard_card user_full_card">
                    <div class="inner">
                        <p class="color_blue"><i class="fas fa-chart-pie"></i></p>
                        <h3>Revenue</h3>
                        <h2>$358796</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col_md_6 pr_7_half">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Latest Order </div>
                </div>
                <div class="card-body">
                    <div class="table_responsive table_responsive_lg">
                        <table class="table table_center">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th> Customer </th>
                                    <th>Order Date</th>
                                    <th>Fulfillment</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#243</td>
                                    <td>Kristie Ritchie</td>
                                    <td> <i class="lni lni-calendar mr_5"></i> November 5th, 2021 9:00 PM</td>
                                    <td><button class="btn btn_warning">no</button></td>
                                </tr>
                                <tr>
                                    <td>#243</td>
                                    <td>Kristie Ritchie</td>
                                    <td> <i class="lni lni-calendar mr_5"></i> November 5th, 2021 9:00 PM</td>
                                    <td><button class="btn btn_info">yes</button></td>
                                </tr>
                                <tr>
                                    <td>#243</td>
                                    <td>Kristie Ritchie</td>
                                    <td> <i class="lni lni-calendar mr_5"></i> November 5th, 2021 9:00 PM</td>
                                    <td><button class="btn btn_warning">no</button></td>
                                </tr>
                                <tr>
                                    <td>#243</td>
                                    <td>Kristie Ritchie</td>
                                    <td> <i class="lni lni-calendar mr_5"></i> November 5th, 2021 9:00 PM</td>
                                    <td><button class="btn btn_warning">no</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col_md_6 pl_7_half">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">last week Order</div>
                </div>
                <div class="card-body">
                    <div class="table_responsive table_responsive_lg ">
                        <table class="table table_center">
                            <thead>
                                <tr>
                                    <th>Period</th>
                                    <th> Total Revenue </th>
                                    <th>Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <i class="lni lni-calendar mr_5"></i> Yesterday</td>
                                    <td>$358.20</td>
                                    <td><button class="btn btn_info">+0.00</button></td>
                                </tr>
                                <tr>
                                    <td> <i class="lni lni-calendar mr_5"></i> Last Week</td>
                                    <td>$358.20</td>
                                    <td><button class="btn btn_info">+0.00</button></td>
                                </tr>
                                <tr>
                                    <td> <i class="lni lni-calendar mr_5"></i> Week-to-date</td>
                                    <td>$358.20</td>
                                    <td><button class="btn btn_warning">-0.00</button></td>
                                </tr>
                                <tr>
                                    <td> <i class="lni lni-calendar mr_5"></i> Yesterday</td>
                                    <td>$358.20</td>
                                    <td><button class="btn btn_info">+0.00</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('additionalJS')

@stop
