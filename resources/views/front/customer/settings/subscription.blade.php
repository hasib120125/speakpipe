@extends('front.app')

@section('content')
    <section class="section min_height_66">
        <div class="container">
            <div class="columns">
                <div class="column is-narrow is-hidden-mobile">
                    @include('front.customer.settings.includes.sidebar')
                </div>
                <div class="column">
                    <h1 class="title">Subscription</h1>
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Subscription details</p>
                        </header>
                        <div class="card-content">
                            <div>
                                Monthly plan: <b>Free</b>
                                (<a href="/plans">Upgrade</a>)
                            </div>
                            <div></div>
                            <div>
                                Storage used: 0 bytes ouf of 100MB
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
