<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a href="{{ route('home') }}" class="navbar-item">
                <img src="{{ asset('themes/front/img/site_v8/speakpipe-logo.svg') }}" style="height: 36px;" />
            </a>
            <a id="mobile-menu-btn" class="navbar-burger burger" role="button" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                @if (Auth::guard('customer')->user())
                    <a class="navbar-item" href="{{ route('customer_help') }}">Get started</a>
                    <a class="navbar-item" href="{{ route('customer_messages') }}">{{ Auth::guard('customer')->user()->email }}</a>
                    <a class="navbar-item" href="{{ route('customer_messages') }}">Inbox</a>
                    <a class="navbar-item" href="{{ route('settings_wedget') }}">Settings</a>
                    <a class="navbar-item" href="{{ route('logout_customer') }}">Logout</a>
                @else
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-primary" href="{{ route('customer_signup') }}">
                                <strong>Sign up</strong>
                            </a>
                            <a class="button is-light" href="{{ route('customer_signin') }}">Log in</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div id="mobile-menu-box" class="navbar-menu is-hidden-desktop">
            @if (Auth::guard('customer')->user())
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('customer_help') }}">Get started</a>
                    <a class="navbar-item is-active" href="{{ route('customer_messages') }}">Inbox</a>
                    <a class="navbar-item " href="{{ route('customer_messages_library') }}">Channels</a>
                    <a class="navbar-item " href="{{ route('customer_messages_sent') }}">Sent</a>
                    <a class="navbar-item " href="{{ route('customer_messages_bookmarks') }}">Bookmarked</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link settings-dropdown">
                            Settings
                        </a>
                        <div class="navbar-dropdown" style="display: none;">
                            <a class="navbar-item " href="{{ route('settings_wedget') }}">Widget settings</a>
                            <a class="navbar-item " href="{{ route('settings_voicemail_page') }}">Voicemail page</a>
                            <a class="navbar-item " href="{{ route('account_settings') }}">Account</a>
                            <a class="navbar-item " href="{{ route('account_subscription') }}">Subscription</a>
                        </div>
                    </div>
                    <a class="navbar-item " href="{{ route('faq_page') }}">FAQ</a>
                    <a class="navbar-item " href="{{ route('plans_page') }}">Pricing</a>
                    <a class="navbar-item" href="#!">Contact us</a>
                    <a class="navbar-item" href="{{ route('logout_customer') }}">Logout</a>
                </div>
            @else
                <div class="navbar-start">
                    <a class="navbar-item" href="{{ route('home') }}">Home</a>
                    <a class="navbar-item" href="{{ route('faq_page') }}">FAQ</a>
                    <a class="navbar-item" href="{{ route('plans_page') }}">Pricing</a>
                    <a class="navbar-item" href="{{ route('customer_signup') }}">Sign up</a>
                    <a class="navbar-item" href="{{ route('customer_signin') }}">Log in</a>
                </div>
            @endif
        </div>
    </div>
</nav>
