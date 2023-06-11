@extends('front.app')

@section('content')
    <section class="section">
        <div class="container has-text-centered">
            <div class="main-box">
                <h1 class="title">
                    Receive voice messages <br>
                    from your podcast listeners
                </h1>
                <a class="button is-primary is-large" href="signup.html">Get started</a>
            </div>

            <div class="columns is-vcentered feature-section is-flex-direction-row-reverse">
                <div class="column has-text-left right-description">
                    <h2 class="title">Increase interaction with your podcast audience</h2>
                    <div class="description">
                        SpeakPipe allows your listeners to send you voice messages directly from your website or voicemail
                        page.
                        You can include received messages in your podcast episodes.
                    </div>
                </div>
                <div class="column is-narrow img-box">
                    <img class="widget-img" src="{{ asset('themes/front/img/site_v8/homepage/ready/widget_rec.png') }}" />
                </div>
            </div>


            <div class="columns is-vcentered feature-section ">
                <div class="column has-text-left right-description">
                    <h2 class="title">Engage listeners through short personal voice recordings</h2>
                    <div class="description">
                        Want to ask your audience a question for an upcoming podcast episode?
                        Record a short voice message on SpeakPipe and share it with listeners. This allows them to listen to
                        your question and send you a voice reply.
                    </div>
                </div>
                <div class="column is-narrow img-box">
                    <img class="width-1" src="{{ asset('themes/front/img/site_v8/homepage/ready/audio_page_title.png') }}" />
                </div>
            </div>

            <div class="columns is-vcentered feature-section is-flex-direction-row-reverse">
                <div class="column has-text-left right-description">
                    <h2 class="title">Create a voicemail page for your podcast</h2>
                    <div class="description">
                        You can set up a personal page with the address speakpipe.com/YourPodcast. You can share it on
                        social media or in a newsletter
                        and your audience will have a simple way to record and send you voice messages.
                    </div>
                </div>
                <div class="column is-narrow img-box">
                    <img class="width-2" src="{{ asset('themes/front/img/site_v8/homepage/ready/voicemail_page3.png') }}" />
                </div>
            </div>

            <div class="columns is-vcentered feature-section ">
                <div class="column has-text-left right-description">
                    <h2 class="title">Easy for listeners to send voice messages</h2>
                    <div class="description">
                        A recording can be sent with just a few clicks without typing anything.
                        Listeners have the option to enter their contact information before uploading a message.
                    </div>
                </div>
                <div class="column is-narrow img-box">
                    <img class="widget-img" src="{{ asset('themes/front/img/site_v8/homepage/ready/widget_send.png') }}" />
                </div>
            </div>

            <div class="columns is-vcentered feature-section is-flex-direction-row-reverse">
                <div class="column has-text-left right-description">
                    <h2 class="title">Messages go into your inbox</h2>
                    <div class="description">
                        All messages are stored in your account, so you can access them at any time.
                    </div>
                </div>
                <div class="column is-narrow img-box">
                    <img src="{{ asset('themes/front/img/site_v8/homepage/ready/mailbox.png') }}" />
                </div>
            </div>

            <div class="box bottom-signup-panel">
                <h2 class="title">Take the interaction with your listeners to the next level</h2>
                <a class="button is-primary is-large" href="signup.html">Get started</a>
            </div>
        </div>
    </section>
@endsection
