<aside class="menu is-medium side-nav">
    <button class="button is-primary is-medium is-fullwidth record-btn" title="Create a voice channel">
        <img src="{{ asset('themes/front/img/site_v8/mic-icon-white.svg') }}" />
        Record
    </button>
    <ul class="menu-list">
        <li><a class="@if(Route::currentRouteName() == 'customer_messages') is-active @endif" href="{{ route('customer_messages') }}">Inbox</a></li>
        <li><a class="@if(Route::currentRouteName() == 'customer_messages_library') is-active @endif" href="{{ route('customer_messages_library') }}">Channels</a></li>
        <li><a class="@if(Route::currentRouteName() == 'customer_messages_sent') is-active @endif" href="{{ route('customer_messages_sent') }}">Sent</a></li>
        <li><a class="@if(Route::currentRouteName() == 'customer_messages_bookmarks') is-active @endif" href="{{ route('customer_messages_bookmarks') }}">Bookmarked</a></li>
    </ul>
    <div class="plan-info is-size-6">
        <div>Storage used</div>
        0 bytes ouf of 100MB
        <progress class="progress is-primary" value="0" max=100></progress>
        <p>
            Free plan
            - <a href="#!">Upgrade</a>
        </p>
    </div>
</aside>