@extends('front.app')

@section('additionalCSS')
<link href="themes/front/css/site-widget.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds">
                    <div class="speakpipe-container">
                        <div id="start-recording-page" class="dlg-page" style="display: block;">
                            <h1 class="widget-page-title">Free online voice recorder</h1>
                            <div class="dlg-msg"></div>
                            <div class="dlg-note">Is your microphone ready?</div>
                            <button type="button" class="wgt-main-btn start-rec-btn">
                                <img class="mic-icon" src="themes/front/img/new/mic-icon-white.svg">
                                <span>Start recording</span>
                            </button>
                            <div class="workflow-hint">
                                <span class="bullet">1</span> Record -
                                <span class="bullet">2</span> Listen -
                                <span class="bullet">3</span> Send
                            </div>
                            
                            <div class="page-note">
                                SpeakPipe voice recorder allows you to create an audio recording directly from a browser by using your microphone.
                                The recording is produced locally on your computer, and you can record as many times as you need.
                                There is the option to save your recording on the SpeakPipe server and get a link to it, so you can send
                                it via email or use on the web.
                                <p>
                                    Works on iPhone, iPad, iPod, and Android devices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('additionalJS')
<script type="text/javascript" src="{{ asset('themes/front/js/speakpipe-widget.min.js') }}"></script>
<script>
    var siteSettings = {"languageCode": "en", "domain": "http://www.speakpipe.devs", "protocol": "https", "isLogEnabled": false, "siteName": "recorder", "publicToken": "recorder", "optin": {"defaultValue": false, "enabled": false, "shortMsg": null}, "isProduction": true, "maxDuration": 300, "siteTypeId": 2, "buildNum": 496, "isDemo": false, "siteId": 31373, "dialog": {"displayName": "Voice recorder", "nameRequired": false, "emailRequired": false, "subscribeEmailLabel": "Subscribe to the SpeakPipe Newsletter for updates about new features", "customCSS": null, "whiteLabel": false, "mobileSupport": true, "subscribeEmailEnabled": false, "height": 345, "width": 340, "isFreePlan": true, "buttonBgColor": null, "thankyouMsg": null, "titleText": null, "welcomeMsg": "You can create an audio recording, save it on the server and get a link to the audio file."}, "visitorToken": "0LQxzBuRNODZ7ZVU", "audioFormat": "mp3", "isSecureConnection": false};
    var widgetTypeCode = 'free_recorder';
    var clientTypeCode = 'desktop';
</script>
@endsection
