@extends('front.app')

@section('content')
    <section class="section has-margin-top-1">
        <div class="container">
            <h1 class="title has-text-primary has-text-centered is-size-2 is-size-3-mobile has-text-weight-normal">Frequently
                Asked Questions</h1>
            <h2 class="title is-3">General</h2>

            <h3>What is SpeakPipe?</h3>
            SpeakPipe is a simple web-based tool that allows you to interact with your audience via voice messages.

            <h3>Is difficult to install SpeakPipe on my website?</h3>
            No, you just need to add a few lines of code to your page. See setup options <a href="help.html">here</a>.<br>
            If you don't know how to add code snippents to your website, you can look into the documentation for your
            website's platform or ask your webmaster to do this for you.

            <h3>Can I use SpeakPipe without installing it on a website?</h3>
            Yes, you can create your personal page on SpeakPipe; share a link to this page with your audience and they will
            be able to send you voice messages.

            <h3>Can I embed the SpeakPipe directly into the page?</h3>
            Yes, you can use the inline widget for this. You can create the widget in <a href="signinb169.html">settings</a>.

            <h3>Can I just paste the SpeakPipe embed code into my blog post?</h3>
            Yes, you can just copy and paste the SpeakPipe code into the HTML source of your blog post. Please note that
            your website platform must allow embedding of third-party code snippets into posts.

            <h3>What the difference between the inline and dialog widgets?</h3>
            The only difference is in the way it appears on your website. The inline widget can be embedded directly in a
            page or blog post. The dialog widget appears as a dialog box when a visitor clicks on the button.
            You can see demos of <a href="#!">the inline widget</a> and <a
                href="#!">the dialog widget</a>.

            <h3>Can I send voice messages to an email address?</h3>
            Yes, you can. Go to your <a href="#!">SpeakPipe dashboard</a>, click the "Create a new audio recording"
            button, and follow the instructions.

            <h3>How can I set up the dialog widget with my own custom button?</h3>
            First, you need to add the SpeakPipe code to your page. Next, in order to put a custom SpeakPipe button on your
            page, use the following code snippet:
            <div class="code-snippet">&lt;a href=&#34;#&#34; onclick=&#34;_speakpipe_open_widget(); return
                false;&#34;&gt;Send a voice message&lt;/a&gt;</div>
            You can customize the code (e.g., add an image or custom text) to make your custom button.

            <h3>Can I download an audio file of the message?</h3>
            Yes, you can download an audio file of the message on your SpeakPipe dashboard.

            <h3>Does a sender have to create a SpeakPipe account in order to send a message through the widget?</h3>
            No, the sender does not have to create an account. After recording their message, the sender has the option of
            leaving their name and email, so you can contact them back.

            <h3>Does SpeakPipe work on mobile devices?</h3>
            SpeakPipe works in the latest versions of Chrome and Firefox on Android devices and in Safari on iOS devices.

            <h3>Is it possible to send a voice reply to the message received?</h3>
            Yes, you can send voice replies to received messages. Please note that you can reply only to messages with an
            email address.

            <h3>Someone left me a voice message but I can't reply—there is no "Reply" button on my page.</h3>
            You can reply only to messages with an email address. If the user didn't leave their email, there is no way to
            reply to such a message. You can make the email input mandatory in your <a
                href="#!">widget settings</a>.

            <h3> Is it possible for the widget to post the recording directly to the webpage it is embedded in?</h3>
            Unfortunately, such an option is not yet supported. Recordings are saved only in your SpeakPipe account for now.

            <h3>I have the widget on my website, and when I click the record button the recorder opens in another window.
                How do I keep it on the same page?</h3>
            In order to make the widget work within the page, you need to switch your website to HTTPS protocol. That's a
            limitation of the Chrome browser.

            <h3>Is it possible to add a SpeakPipe widget to the bottom of an email newsletter?</h3>
            There is no way to embed any widgets into email. However, you can put the SpeakPipe widget on a page of your
            website and add a link to this page to your email newsletter asking people to send you voice messages.

            <h3>Will I be able to use SpeakPipe on my website if I'm already using some other plugins and widgets?</h3>
            There are no conflicts with other plugins, so you can use SpeakPipe on your website. If you see any issues with
            the SpeakPipe widget, feel free to contact SpeakPipe support.

            <h3>Is it possible for SpeakPipe to work within locked (restricted) pages of my website?
                I want to make the widget available only to the registered members of my website.</h3>
            The SpeakPipe widget works on pages with restricted access; there is no problem with that. All SpeakPipe
            messages are private and only available in your SpeakPipe account unless you share them publicly.

            <h3>Do you have an affiliate program for SpeakPipe?</h3>
            No, we don't have an affiliate program at this moment.


            <h2 class="title is-3">Customizations</h2>

            <h3>How do I remove the side button on mobile devices?</h3>
            You can disable the SpeakPipe side button on mobile devices. Go to <a href="#!">the widget
                settings</a> and turn off the option "Show the side button on mobile devices" in the "Sidebar button
            settings" section.

            <h3>How do I remove the "Powered by SpeakPipe" label from the widget?</h3>
            There is no such customization.

            <h3>How do I add fields other than name and email address to the form in the widget?</h3>
            There is no way to add extra fields to the widget.

            <h3>How do I change the title and message text in the widget?</h3>
            You can customize it in <a href="#!">the widget settings</a>.

            <h3>How do I decrease the max duration of recordings in the widget?</h3>
            You can set a custom value for max duration in <a href="#!">the widget
                settings</a>.

            <h3>Can I translate the widget into another language? My audience doesn't understand English.</h3>
            Unfortunately, SpeakPipe only supports an English-language version for now.


            <h2 class="title is-3">Billing</h2>

            <h3>How do I update my billing information?</h3>
            Please go to your <a href="#!">subscription page</a> and follow the instructions.

            <h3>If I sign up for the paid subscription, can I cancel at anytime?</h3>
            Yes, you can cancel your subscription at anytime. If you cancel your subscription, your paid account will still
            be available for the rest of the current billing period. At the end of this period your SpeakPipe account will
            be switched to the free plan.

            <h3>What happens when storage has reached its maximum?</h3>
            You will be notified when your storage is 90 percent full. You will have the option to upgrade your account to a
            bigger plan or clean up your storage. Once your storage reaches its maximum, your widgets will not be able to
            receive voice messages until you add more storage.

            <h3>What's your refund policy?</h3>
            If you are not 100 percent satisfied with your purchase within 30 days of the purchase date, we will fully
            refund the cost of your order.

            <div class="more-questions">If you have more questions, feel free to <a href="#!">contact us</a>.
            </div>
        </div>
    </section>
@endsection
