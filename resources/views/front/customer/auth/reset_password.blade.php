@extends('front.app')

@section('content')
    <section class="section has-margin-top-1 min_height_60">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-fifths">
                    <h1 class="title has-text-primary has-text-centered is-size-2 is-size-3-mobile has-text-weight-normal">
                        Forgot your password?</h1>
                    <form method="POST" action="/account/reset_password">
                        <div class="field">
                            <label class="label">Enter the email address associated with your account</label>
                            <div class="control">
                                <input type="text" class="input" name="email" value="">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control has-text-centered">
                                <input type="submit" class="button is-primary is-medium" value="Reset password">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
