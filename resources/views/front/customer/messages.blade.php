@extends('front.app')

@section('content')
    <section class="section min_height_66">
        <div class="container">
            <div class="columns main-layout">
                <div class="column is-narrow is-hidden-mobile">
                    <aside class="menu is-medium side-nav">
                        <button class="button is-primary is-medium is-fullwidth record-btn" title="Create a voice channel">
                            <img src="{{ asset('themes/front/img/site_v8/mic-icon-white.svg') }}" />
                            Record
                        </button>
                        <ul class="menu-list">
                            <li><a class="is-active" href="/messages">Inbox</a></li>
                            <li><a href="/messages/library">Channels</a></li>
                            <li><a href="/messages/sent">Sent</a></li>
                            <li><a href="/messages/bookmarks">Bookmarked</a></li>
                        </ul>
                        <div class="plan-info is-size-6">
                            <div>Storage used</div>
                            0 bytes ouf of 100MB
                            <progress class="progress is-primary" value="0" max=100></progress>
                            <p>
                                Free plan
                                - <a href="/plans">Upgrade</a>
                            </p>
                        </div>
                    </aside>
                </div>
                <div class="column">
                    <nav class="level is-mobile is-hidden-tablet mobile-panel">
                        <div class="level-left">
                            <div class="level-item">
                                <button class="button is-primary record-btn">
                                    <img src="{{ asset('themes/front/img/site_v8/mic-icon-white.svg') }}" />
                                    Record
                                </button>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <form method="get" action="/messages/received">
                                    <div class="field has-addons">
                                        <div class="control">
                                            <input class="input" type="text" name="search" value=""
                                                placeholder="Find an audio" />
                                        </div>
                                        <div class="control">
                                            <input class="button" type="submit" value="Search" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>

                    <div class="list-title-mobile is-hidden-tablet">
                        received
                    </div>
                    <div class="block is-size-4 has-text-centered">
                        You have no voice messages yet.
                        <div class="is-size-5 mt-3">
                            In order to start receiving voice messages, <br>
                            you need to install SpeakPipe widget on your website.<br>
                            <a href="/help/setup">Install now</a>
                            <br>
                            <br>
                            Or create and share your audio channel.<br>
                            <div class="mt-3">
                                <button class="button record-btn is-primary">Record now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <audio class='audioplayer'>
        <source id="audio-player-src" src="" />
    </audio>

    <div class="manage-items-panel is-hidden-tablet">
        <button class="button delete-selected-btn is-primary is-outlined">Delete</button>
        <button class="button select-all-btn">Select all</button>
        <button class="button is-pulled-right cancel-select-btn">Cancel</button>
    </div>

    <div id="delete-audio-dlg" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Delete audio(s)?</p>
                <button class="delete close-dlg" aria-label="close"></button>
            </header>
            <section class="modal-card-body">
                Are you sure you want to delete the selected message(s)?<br>
                There is no way to restore deleted messages.
            </section>
            <footer class="modal-card-foot">
                <form method="post" action="/messages/delete_msg">
                    <input class="msg_id" type="hidden" name="msg_id" value="" />
                    <input class="site_id" type="hidden" name="site_id" value="" />
                    <input class="ids_json" type="hidden" name="ids_json" value="" />
                    <input class="button" type="submit" value="Delete" />
                </form>
                <button class="button close-dlg">Cancel</button>
            </footer>
        </div>
    </div>

    <div id="share-audio-dlg" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <button class="dialog-close-button close-dlg" aria-label="close"></button>
                <h1 class="title">Share the channel</h1>

                <div class="audio-embed-container">
                    <iframe src=""></iframe>
                </div>
                <div class="field">
                    <label class="label">
                        Link to the message (<a class="open-page-url" href="#" target="_blank">open</a>
                        - <a class="clipboard-copy-btn" data-selector="#share-audio-dlg .audio-page-url"
                            href="#">copy</a>)
                    </label>
                    <div class="control">
                        <input class="input audio-page-url" type="text" readonly="" />
                    </div>
                </div>
                <div class="field">
                    <label class="label">
                        Embed code (<a class="clipboard-copy-btn" data-selector="#share-audio-dlg .audio-embed-code"
                            href="#">copy</a>)
                        - <a class="open-embed-page-url" href="#" target="_blank">open</a>
                    </label>
                    <div class="control">
                        <textarea class="textarea audio-embed-code" rows="3" readonly=""></textarea>
                    </div>
                </div>
                <div class="has-text-centered">
                    <button class="button close-dlg">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="record-outgoing-dlg" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <button class="dialog-close-button close-dlg" aria-label="close"></button>
                <iframe allow="microphone" frameborder="0" src=""></iframe>
            </div>
        </div>
    </div>
    <div id="edit-outgoing-dlg" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <button class="dialog-close-button close-dlg" aria-label="close"></button>
                <h1 class="title">Edit audio info</h1>

                <div class="dlg-body">
                    <div class="dlg-loading">
                        Please wait...
                    </div>
                    <div class="dlg-content">
                        <div class="field">
                            <label class="label">Audio title</label>
                            <div class="control">
                                <input class="input audio_title" type="text" name="audio_title" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Author name</label>
                            <div class="control">
                                <input class="input author_name" type="text" name="author_name" />
                            </div>
                        </div>
                        <div class="has-text-centered mt-5">
                            <button class="button is-primary save-audio-info-btn">Save</button>
                            <button class="button close-dlg">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
