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
                    <a class="navbar-item" href="/account/settings/widget">Settings</a>
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
                    <a class="navbar-item" href="/help">Get started</a>
                    <a class="navbar-item is-active" href="/messages">Inbox</a>
                    <a class="navbar-item " href="/messages/library">Channels</a>
                    <a class="navbar-item " href="/messages/sent">Sent</a>
                    <a class="navbar-item " href="/messages/bookmarks">Bookmarked</a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link settings-dropdown">
                            Settings
                        </a>
                        <div class="navbar-dropdown" style="display: none;">
                            <a class="navbar-item " href="/account/settings/widget">Widget settings</a>
                            <a class="navbar-item " href="/account/settings/voicemail-page">Voicemail page</a>
                            <a class="navbar-item " href="/account/settings">Account</a>
                            <a class="navbar-item " href="/account/subscription">Subscription</a>
                        </div>
                    </div>
                    <a class="navbar-item " href="/faq">FAQ</a>
                    <a class="navbar-item " href="/plans">Pricing</a>
                    <a class="navbar-item" href="/contact">Contact us</a>
                    <a class="navbar-item" href="/signout">Logout</a>
                </div>
            @else
                <div class="navbar-start">
                    <a class="navbar-item" href="index.html">Home</a>
                    <a class="navbar-item" href="faq.html">FAQ</a>
                    <a class="navbar-item" href="plans.html">Pricing</a>
                    <a class="navbar-item" href="{{ route('customer_signup') }}">Sign up</a>
                    <a class="navbar-item" href="{{ route('customer_signin') }}">Log in</a>
                </div>
            @endif
        </div>
    </div>
</nav>
