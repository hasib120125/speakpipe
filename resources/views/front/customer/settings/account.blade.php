@extends('front.app')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-narrow is-hidden-mobile">
                    @include('front.customer.settings.includes.sidebar')
                </div>
                <div class="column">
                    <h1 class="title">Account settings</h1>
                    <div id="change-username" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Change name</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/change_username" enctype="multipart/form-data">
                                <div class="field">
                                    <label class="label">Your name</label>
                                    <div class="control">
                                        <input type="text" class="input" name="user_name" value="Hasib Islam" />
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
                    <div id="change-password" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Change password</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/change_password" enctype="multipart/form-data">
                                <div class="field">
                                    <label class="label">Current password</label>
                                    <div class="control">
                                        <input type="password" class="input" name="current_password" />
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">New password</label>
                                    <div class="control">
                                        <input type="password" class="input" name="new_password" />
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Verify new password</label>
                                    <div class="control">
                                        <input type="password" class="input" name="new_password_verify" />
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
                    <div id="change-email" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Change email</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/change_email" enctype="multipart/form-data">
                                <div class="field">
                                    <label class="label">Current email</label>
                                    hasib.lynkto@gmail.com
                                </div>
                                <div class="field">
                                    <label class="label">New email</label>
                                    <div class="control">
                                        <input type="text" class="input" name="new_email" value="" />
                                    </div>
                                    <p class="help">We will send a confirmation to your email.</p>
                                </div>
                                <div class="field">
                                    <label class="label">Current password</label>
                                    <div class="control">
                                        <input type="password" class="input" name="current_password" />
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

                    <div id="email-notifications" class="card">
                        <header class="card-header">
                            <p class="card-header-title">Email notifications</p>
                        </header>
                        <div class="card-content">
                            <form method="post" action="/account/settings/notifications" enctype="multipart/form-data">
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="email_new_msg"> Email me when I
                                        receive a new voice message
                                    </label>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" disabled="" name="email_audio_file"> Attach an audio
                                        file of the voice message to the email notification (if its duration doesn&#39;t
                                        exceed 5 minutes)
                                    </label>
                                    <div>
                                        <a href="/plans">Upgrade your account</a> to a plan which provides this feature.
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="email_sent_msg"> Email me when I
                                        send a voice message
                                    </label>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="email_system_updates"> Allow
                                        SpeakPipe to send emails about important system updates
                                    </label>
                                </div>
                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" checked="checked" name="email_newsletter"> Allow SpeakPipe
                                        to send newsletters
                                    </label>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input type="submit" class="button is-primary is-outlined" value="Save" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card">
                        <header class="card-header">
                            <p class="card-header-title">Account ID</p>
                        </header>
                        <div class="card-content">
                            <div class="field">
                                <label class="label">Your account ID is</label>
                                <div class="control">
                                    <input type="text" class="input" name="" readonly
                                        value="e9hmgxfiktbu8j5j0maj8w3usowx4jao" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
