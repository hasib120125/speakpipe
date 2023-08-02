@extends('front.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-narrow is-hidden-mobile">
                    @include('front.customer.settings.includes.sidebar')
                </div>
                <div class="column">
                    <h1 class="title">Voicemail page settings</h1>
                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Page address</p>
                        </header>
                        <div class="card-content">
                            <a href="https://www.speakpipe.com/hasib">https://www.speakpipe.com/hasib</a>
                        </div>
                    </div>

                    <div id="voicemail-page" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Page settings</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/voicemail-page/update"
                                enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316030" />
                                <input type="hidden" name="public_token" value="hasib" />
                                <input type="hidden" name="site_type_code" value="voicemail_page" />
                                <div class="message is-warning upload-warn" style="display: none;">
                                    <div class="message-body">
                                        New picture file is selected. Please press the "Save settings" button to upload the
                                        file.
                                    </div>
                                </div>

                                <div class="columns">
                                    <div class="column is-narrow">
                                        <img style="width: 120px;"
                                            src="https://s3.amazonaws.com/speakpipe/pics/nbocdmpchtuq7bpauhceqqdv3u09vjba.jpg" />
                                    </div>
                                    <div class="column">
                                        <div class="field">
                                            <label class="label">Your photo or picture</label>
                                            <div class="file">

                                                <label class="file-label">
                                                    <input class="file-input" type="file" name="page_picture">
                                                    <span class="file-cta">
                                                        <span class="file-label">
                                                            Choose a file...
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <p class="help">Personalize your page with your own photo or picture. (Maximum
                                                size of 700k. JPG, GIF, PNG) </p>
                                        </div>
                                    </div>
                                </div>


                                <div class="field">
                                    <label class="label">Website</label>
                                    <div class="control">
                                        <input type="text" class="input" name="page_website_url" value="https://hasib.binarydevs.com" />
                                    </div>
                                    <p class="help">Have a homepage or a blog? Put the address here.</p>
                                </div>

                                <div class="field">
                                    <label class="label">About yourself</label>
                                    <div class="control">
                                        <textarea class="textarea" name="dlg_about_user" rows="2">My self Hasib Islam, I&#39;m a programmer.</textarea>
                                    </div>
                                    <p class="help">Brief details about yourself or any other additional info. (max. 500 characters)</p>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined" value="Save settings" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div id="widget-appearance" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Widget appearance</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/widget/appearance" enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316030" />
                                <input type="hidden" name="public_token" value="hasib" />
                                <input type="hidden" name="site_type_code" value="voicemail_page" />
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
                                        <textarea class="textarea" name="dlg_welcome_text" rows="2">We would love to hear from you! Please record your message.</textarea>
                                    </div>
                                    <p class="help">Your visitors will see this message before they start recording. (max. 100 characters)</p>
                                </div>

                                <div class="field">
                                    <label class="label">&#34;Thank you&#34; message</label>
                                    <a href="/plans">Upgrade your account</a> to a plan which provides this feature.
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined" value="Save widget settings" />
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
                            <form method="post" action="/account/settings/widget/restrictions" enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316030" />
                                <input type="hidden" name="public_token" value="hasib" />
                                <input type="hidden" name="site_type_code" value="voicemail_page" />

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

                    <div id="set-parent" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Set parent widget</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/voicemail-page/set-parent-widget"
                                enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316030" />
                                <input type="hidden" name="public_token" value="hasib" />
                                <input type="hidden" name="site_type_code" value="voicemail_page" />
                                <div>
                                    Voicemail page can use the same settings for appearance and restrictions of the
                                    specified widget.
                                </div>
                                <div class="has-margin-top-20">
                                    <div class="field">
                                        <label class="checkbox">
                                            <input type="checkbox" name="use_parent_settings"> Use settings from the
                                            widget
                                        </label>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <div class="select">
                                                <select name="parent_site_id">
                                                    <option value="">Select the widget</option>
                                                    <option value="316028">
                                                        Default</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="control">
                                            <input type="submit" class="button is-primary is-outlined" value="Save" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="change-name" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Change page name</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/voicemail-page/update-name"
                                enctype="multipart/form-data">
                                <input type="hidden" name="site_id" value="316030" />
                                <input type="hidden" name="public_token" value="hasib" />
                                <input type="hidden" name="site_type_code" value="voicemail_page" />
                                <div class="field">
                                    <label class="label">Your voicemail page address</label> https://www.speakpipe.com/hasib
                                </div>
                                <div class="field">
                                    <label class="label">Page name</label>
                                    <div class="control">
                                        <input type="text" class="input" name="page_name" value="hasib" />
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined" value="Change" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
