@extends('front.app')

@section('content')
    <section class="section has-margin-top-1">
        <div class="container">
            <h1 class="title has-text-primary has-text-centered is-size-2 is-size-3-mobile has-text-weight-normal">Plans and
                pricing</h1>
            <div class="has-text-centered billing-period">
                <a class="button selected-box billed-annually-btn" href="#"><span>Billed annually</span> <sup>save
                        20%</sup></a>
                <a class="button billed-monthly-btn" href="#"><span>Billed monthly</span></a>
            </div>
            <div class="columns is-centered">
                <div class="column is-narrow">
                    <div class="plan-info has-text-centered">
                        <div class="plan-name">Free</div>
                        <ul class="plan-features">
                            <li>
                                30 messages per month
                            </li>
                            <li>
                                Max recording duration<br>
                                90 seconds
                            </li>
                            <li>
                                100MB storage
                            </li>
                            <li>
                                One widget
                            </li>
                            <li>
                                Email notifications
                            </li>
                        </ul>
                        <a class="button is-primary is-medium" href="signup66bf.html?plan=free">
                            Create account
                        </a>
                    </div>
                </div>
                <div class="column is-narrow">
                    <div class="plan-info has-text-centered">
                        <div class="plan-name">Gold</div>
                        <div class="plan-price price-billed-annually">
                            <span class="price-val">$12</span>/month
                            <div style="font-size: 16px;">if paid annually</div>
                        </div>
                        <div class="plan-price price-billed-monthly">
                            <span class="price-val">$15</span>/month
                        </div>
                        <ul class="plan-features">
                            <li>
                                Unlimited messages
                            </li>
                            <li>
                                Max recording duration<br>
                                5 minutes
                            </li>
                            <li>
                                50GB storage
                            </li>
                            <li>
                                Multiple widgets
                            </li>
                            <li>
                                Email notifications
                                <br>with audio attachment
                                <div class="feature-hint">
                                    Audio file of the message can be<br> attached to the email
                                </div>
                            </li>
                            <li>
                                Widget customization
                                <div class="feature-hint">Customize title, text<br> and button color of the widget</div>
                            </li>
                            <li>
                                <b>30-day free trial</b>
                            </li>
                        </ul>
                        <a class="button is-primary is-medium" href="signupf97a.html?plan=gold">
                            Start Free Trial
                        </a>
                    </div>

                </div>
                <div class="column is-narrow">
                    <div class="plan-info has-text-centered">
                        <div class="plan-name">Premium</div>

                        <div class="plan-price price-billed-annually">
                            <span class="price-val">$36</span>/month
                            <div style="font-size: 16px;">if paid annually</div>
                        </div>
                        <div class="plan-price price-billed-monthly">
                            <span class="price-val">$45</span>/month
                        </div>
                        <ul class="plan-features">
                            <li>
                                Unlimited messages
                            </li>
                            <li>
                                Max recording duration<br>
                                10 minutes
                            </li>
                            <li>
                                500GB storage
                            </li>
                            <li>
                                Multiple widgets
                            </li>
                            <li>
                                Email notifications
                                <br>with audio attachment
                                <div class="feature-hint">
                                    Audio file of the message can be<br> attached to the email
                                </div>
                            </li>
                            <li>
                                Widget customization
                                <div class="feature-hint">Customize title, text<br> and button color of the widget</div>
                            </li>
                            <li>
                                <b>30-day free trial</b>
                            </li>
                        </ul>
                        <a class="button is-primary is-medium" href="signup109c.html?plan=premium">
                            Start Free Trial
                        </a>
                    </div>
                </div>
            </div>
            <div class="block mt-6">
                <h3 class="title is-4 money_guarantee">30-day money-back guarantee</h3>
                <div class="subtitle">
                    If you are not 100% satisfied with your purchase, within 30 days from the purchase date, we will fully
                    refund the cost of your order.
                </div>
            </div>

            <div class="block mt-6">
                <h3 class="title is-4">Common question</h3>
                <p>
                <h4 class="">If I sign up for the paid subscription, can I cancel at anytime?</h4>
                Yes, you can cancel your subscription at anytime. If you cancel your subscription, your paid account will
                still be available for the rest of the current billing period. At the end of this period your SpeakPipe
                account will be switched to the free plan.
                </p>
                <p>
                <h4 class="">What happens when storage has reached its maximum?</h4>
                You will be notified when your storage is 90 percent full. You will have the option to upgrade your account
                to a bigger plan or clean up your storage. Once your storage reaches its maximum, your widgets will not be
                able to receive voice messages until you add more storage.
                </p>
                <p>
                <h4 class="">What's your refund policy?</h4>
                If you are not 100 percent satisfied with your purchase within 30 days of the purchase date, we will fully
                refund the cost of your order.
                </p>
            </div>
        </div>
    </section>
@endsection
