@extends('front.app')

@section('content')
    <section class="section min_height_66">
        <div class="container">
            <div class="columns main-layout">
                <div class="column is-narrow is-hidden-mobile">
                    @include('front.customer.messages.includes.sidebar')
                </div>
                <div class="column">
                    <div class="block is-size-4 has-text-centered">
                        <div class="speakpipe-container">
                            <div id="start-recording-page" class="dlg-page" style="display: block;">
                                <h1 class="widget-page-title">Create your voice channel</h1>
                                <div class="dlg-msg">Voice channel is a new personal way to engage and communicate with your
                                    audience.</div>
                                <div class="dlg-note">Is your microphone ready?</div>
                                <button type="button" class="wgt-main-btn start-rec-btn">
                                    <img class="mic-icon" src="{{ asset('themes/front/img/new/mic-icon-white.svg') }}">
                                    <span>Start recording</span></button>
                                <div class="workflow-hint">
                                    <span class="bullet">1</span> Record -
                                    <span class="bullet">2</span> Listen -
                                    <span class="bullet">3</span> Send
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
