@extends('admin.layouts.main')

@section('content')
    <div class="col_md_12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Customer List</div>
            </div>
            <div class="card-body">
                <div class="table_responsive table_responsive_xl">
                    <table class="table table_bordered table_last_row_end table_fixed">
                        <thead>
                            <tr>
                                <th style="width: 50px">ID</th>
                                <th style="width:350px">NAME</th>
                                <th style="width:300px">EMAIL</th>
                                <th style="width:150px">ACCOUNT ID</th>
                                <th style="width:150px">PLAN</th>
                                <th style="width: 170px;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($customers) > 0)
                                @foreach($customers as $key => $customer)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td class="white_space_nowrap overflow_elipsis">{{ $customer->name }}</td>
                                        <td class="white_space_nowrap overflow_elipsis">{{ $customer->email }}</td>
                                        <td>{{ $customer->account_id }}</td>
                                        <td>{{ $customer->plan_id }}</td>
                                        <td class="white_space_nowrap ">
                                            <a href="/vendor/live-videos/17"
                                                class="btn btn_info">Details
                                            </a> &nbsp; 
                                            <button class="btn btn_danger">Stop</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="pagination_global p_0 d_flex_center">
                    {{ $customers->links('admin.dashboard.others.pagination') }}
                </div>
            </div>
        </div>
    </div>
@stop


@section('additionalJS')

@stop
