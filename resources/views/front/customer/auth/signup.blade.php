@extends('front.app')

@section('content')
    <section class="section has-margin-top-1">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-three-fifths auth-form">
                    <h1 class="title has-text-primary has-text-centered is-size-2 is-size-3-mobile has-text-weight-normal">
                        Create your account</h1>
                    @if ($errors->has('user_name'))
                        <div class="message is-danger">
                            <div class="message-body">
                                Please specify your name.
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('email'))
                        <div class="message is-danger">
                            <div class="message-body">
                                Email is incorrect.
                            </div>
                        </div>
                    @endif
                    @if ($errors->has('password'))
                        <div class="message is-danger">
                            <div class="message-body">
                                Password is required.
                            </div>
                        </div>
                    @endif
                    <form id="signup_form" action="{{ route('customer_signup_post') }}" method="post">
                        @csrf
                        <input type="hidden" name="plan" value="free" />
                        <p class="mb-4">
                            You are about to sign up for the <b>free</b> plan!<br>
                            Choose one of our <a href="#!">professional plans</a>.
                        </p>

                        <div class="field">
                            <label class="label">Your name</label>
                            <div class="control">
                                <input type="text" class="input" name="user_name" value="{{ old('user_name') }}" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Your email</label>
                            <div class="control">
                                <input type="text" class="input" name="email" value="{{ old('email') }}" />
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">New password</label>
                            <div class="control">
                                <input type="password" class="input" name="password" />
                            </div>
                            Already have an account? <a href="{{ route('customer_signin') }}">Log in</a>
                        </div>

                        <div class="field mt-6">
                            <div class="control has-text-centered">
                                <input type="submit" class="button is-primary is-medium" value="Continue" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
