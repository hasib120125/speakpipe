@extends('front.app')

@section('content')
    <section class="section has-margin-top-1 min_height_60">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-three-fifths auth-form">
                    <h1 class="title has-text-primary has-text-centered is-size-2 is-size-3-mobile has-text-weight-normal">
                        Sign in</h1>
                    <form method="post" action="https://www.speakpipe.com/signin">
                        {{-- <div class="message is-success">
                            <div class="message-body">
                                You need to sign into your SpeakPipe account.
                            </div>
                        </div> --}}
                        <p class="mb-4">
                            Don't have an account? <a href="{{ route('customer_signup') }}">Sign up</a>
                        </p>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input type="text" class="input" name="email" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                                <input type="password" class="input" name="password" />
                            </div>
                        </div>
                        <a class="is-pulled-right" href="{{ route('customer_reset_password') }}">Forgot password?</a>
                        <div class="field">
                            <label class="checkbox">
                                <input type="checkbox" name="stay_signed_in" checked="checked"> Stay signed in
                            </label>
                        </div>
                        <div class="field mt-6">
                            <div class="control has-text-centered">
                                <input type="submit" class="button is-primary is-medium" value="Sign in" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
