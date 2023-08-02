@extends('front.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-narrow is-hidden-mobile">
                    @include('front.customer.settings.includes.sidebar')
                </div>
                <div class="column">
                    <a class="button is-pulled-right is-primary is-outlined is-hidden-mobile"
                        href="/account/settings/widget/add">Add widget</a>
                    <h1 class="title">Widget settings</h1>
                    <div class="is-hidden-tablet mb-4">
                        <span class="has-text-weight-bold">Widget</span>
                        <div class="dropdown select" style="vertical-align: middle;">
                            <div class="dropdown-trigger">
                                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
                                    Default
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                                <div class="dropdown-content">
                                    <a class="dropdown-item" href="/account/settings/widget/316028" title="Default">
                                        Default
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="is-pulled-right" href="/account/settings/widget/add">Add</a>
                    </div>

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Inline widget preview</p>
                        </header>
                        <div class="card-content">
                            <iframe src="https://www.speakpipe.com/widget/inline/e9hmgxfiktbu8j5j0maj8w3usowx4jao?pv=1"
                                allow="microphone" width="100%" height="200" frameborder="0"></iframe>
                            <script async src="https://www.speakpipe.com/widget/loader.js" charset="utf-8"></script>
                        </div>
                    </div>

                    <div id="widget-appearance" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Widget appearance</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/widget/appearance" enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316028" />
                                <input type="hidden" name="public_token" value="e9hmgxfiktbu8j5j0maj8w3usowx4jao" />
                                <input type="hidden" name="site_type_code" value="website" />
                                <div class="field">
                                    <label class="label">Widget color</label>
                                    <a href="/plans">Upgrade your account</a> to a plan which provides this feature.
                                </div>
                                <div class="field">
                                    <b>Default title:</b> Send a voice message to Hasib Islam
                                    <div><a href="/account/settings">edit your name</a></div>
                                </div>
                                <div class="field">
                                    <label class="label">Widget title</label>
                                    <a href="/plans">Upgrade your account</a> to a plan which provides this feature.
                                </div>
                                <div class="field">
                                    <label class="label">&#34;Welcome&#34; message</label>
                                    <div class="control">
                                        <textarea class="textarea" name="dlg_welcome_text" rows="2">We would love to hear from you!Please record your message.</textarea>
                                    </div>
                                    <p class="help">Your visitors will see this message before they start recording. (max.100 characters)</p>
                                </div>
                                <div class="field">
                                    <label class="label">&#34;Thank you&#34; message</label>
                                    <a href="/plans">Upgrade your account</a> to a plan which provides this feature.
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined"
                                            value="Save widget settings" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="widget-restrictions" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Widget restrictions</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/widget/restrictions"
                                enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316028" />
                                <input type="hidden" name="public_token" value="e9hmgxfiktbu8j5j0maj8w3usowx4jao" />
                                <input type="hidden" name="site_type_code" value="website" />
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" name="dlg_name_required"> Name required
                                    </label>
                                    <p class="help">Sender must leave their name.</p>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" name="dlg_email_required"> Email required
                                    </label>
                                    <p class="help">Sender must leave their email.</p>
                                </div>

                                <div class="field">
                                    <label class="label">Max recording duration (in seconds)</label>
                                    <a href="/plans">Upgrade your account</a> to a plan which provides this feature.
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined" value="Save settings" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="side-button" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Side button settings (for dialog widget)</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/widget/tab" enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316028" />
                                <input type="hidden" name="public_token" value="e9hmgxfiktbu8j5j0maj8w3usowx4jao" />
                                <input type="hidden" name="site_type_code" value="website" />
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="is_widget_tab_enabled"> Show the
                                        side button
                                    </label>
                                </div>
                                <div class="field">
                                    <label class="label">Button text</label>
                                    <div class="control">
                                        <input type="text" class="input" name="label_text" value="Send Voicemail" />
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Button position</label>
                                    <div class="control">
                                        <div class="select">
                                            <select name="tab_position_id">
                                                <option value="1" selected="selected">
                                                    middle-right</option>
                                                <option value="2">
                                                    middle-left</option>
                                                <option value="3">
                                                    bottom-right</option>
                                                <option value="4">
                                                    bottom-left</option>
                                                <option value="5">
                                                    top-right</option>
                                                <option value="6">
                                                    top-left</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Button color</label>
                                    <div class="control">
                                        <div class="colorpicker">
                                            <input type="hidden" class="input" name="tab_bgcolor" value="444444" />
                                            <div class="color-value" style="background-color: #444444;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="tab_mobile_enabled"> Show the side
                                        button on mobile devices
                                    </label>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined"
                                            value="Save button settings" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="embed-code" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Embed code</p>
                        </header>
                        <div class="card-content">
                            <div>
                                <b>Dialog widget embed code</b> - <a class="clipboard-copy-btn"
                                    data-selector="#embed-code .dialog-embed-code" href="#">Copy</a>
                                <div>
                                    <textarea class="textarea dialog-embed-code" readonly="readonly"></textarea>
                                </div>
                            </div>
                            <div class="mt-5">
                                <b>Inline widget embed code</b> - <a class="clipboard-copy-btn"
                                    data-selector="#embed-code .inline-embed-code" href="#">Copy</a>

                                <textarea class="textarea inline-embed-code" readonly="readonly"><iframe src="https://www.speakpipe.com/widget/inline/e9hmgxfiktbu8j5j0maj8w3usowx4jao" allow="microphone" width="100%" height="200" frameborder="0"></iframe>
                                    <script async src="https://www.speakpipe.com/widget/loader.js" charset="utf-8"></script>
                                </textarea>
                            </div>
                            <div class="mt-5">
                                <a href="/help/setup">How to get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
