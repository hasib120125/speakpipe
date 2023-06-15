<aside class="menu is-medium">
    <ul class="menu-list">
        <li>
            <a class="@if(Route::currentRouteName() == 'settings_wedget') is-active @endif" href="{{ route('settings_wedget') }}">Widget settings</a>
        </li>
        <li>
            <a class="@if(Route::currentRouteName() == 'settings_voicemail_page') is-active @endif" href="{{ route('settings_voicemail_page') }}">Voicemail page</a>
        </li>
        <li>
            <a class="@if(Route::currentRouteName() == 'account_settings') is-active @endif" href="{{ route('account_settings') }}">Account</a>
        </li>
        <li>
            <a  class="@if(Route::currentRouteName() == 'account_subscription') is-active @endif" href="{{ route('account_subscription') }}">Subscription</a>
        </li>
    </ul>
</aside>