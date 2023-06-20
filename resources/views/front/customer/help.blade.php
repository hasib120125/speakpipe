@extends('front.app')

@section('content')
    <section class="section min_height_66">
        <div class="container">
            <h1 class="title">Different options to use SpeakPipe</h1>
            <div class="option-box">
                <h2>Voice channel</h2>
                <div>
                    Record an outgoing audio message and share it with your audience. People will be able to record an audio
                    reply to you.
                    <div>
                        <a class="record-btn" href="#">Record your audio</a>
                    </div>
                </div>
            </div>

            <div class="option-box">
                <h2>Voicemail page</h2>
                <div>
                    You can create a personal page on SpeakPipe without installing anything on your website.
                    If you share the link to the page with your customers, they can use it to send you voice messages.
                    <div>
                        <a href="#!">Customize</a>
                        - <a href="#!" target="_blank">Demo</a>
                    </div>
                </div>
            </div>

            <div class="option-box">
                <h2>Inline widget</h2>
                <div>
                    You can embed SpeakPipe directly into a blog post or webpage.
                    An inline widget provides flexibility and you can give the widget context by embedding it directly into
                    the content on your website.
                    <div>
                        <a href="#!">Embed into a page</a>
                        - <a href="#!">Customize</a>
                        - <a href="#!">Demo</a>
                    </div>
                </div>
            </div>

            <div class="option-box">
                <h2>Dialog widget</h2>
                <div>
                    You can add the SpeakPipe side button to your website.
                    It allows your visitors to access the SpeakPipe dialog widget from any page of the website.
                    <div>
                        <a href="#!">Install on a website</a>
                        - <a href="#!">Customize</a>
                        - <a href="#!">Demo</a>
                    </div>
                </div>
            </div>
            Have any questions? - See our <a href="#!">FAQ page</a> or <a href="#!">contact us</a>.
        </div>
    </section>
@endsection
