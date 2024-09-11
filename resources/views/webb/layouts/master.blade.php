<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travel index Page | Uipaper</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/webtemplate/css/styles.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/webtemplate/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/webtemplate/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/webtemplate/img/favicons/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/webtemplate/img/favicons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/webtemplate/img/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" href="/webtemplate/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" sizes="16x16" href="/webtemplate/img/favicons/favicon.ico">
</head>

<body class="transition-none no-padding">
<div class="search-section">
    <div class="wrap">
        <div class="wrap_float">
            <div class="search-form">
                <input type="text" class="search-input" placeholder="Search…">
                <button class="search-submit"></button>
            </div>
            <div class="search-close" id="search-close"></div>
        </div>
    </div>
</div>
<div class="container page">
    <div class="container-wrap">
        <div class="mobile-panel">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="mobile-btn" id="/webtemplate/js-menu-open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a class="logo" href="/">
                        uipaper
                    </a>
                    <div class="search-button"></div>
                </div>
            </div>
        </div>
        <div class="container-wrap--dummy"></div>
        @include('webb.layouts.header')

        @yield('content')

        <div class="footer">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="footer-top">
                        <div class="footer-column first-column">
                            <div class="logo">uipaper</div>
                            <div class="text">Some text</div>
                        </div>
                        <div class="footer-column">
                            <div class="column-title">General</div>
                            <ul class="footer-ul">
                                <li><a href="#">Contact Form</a></li>
                                <li><a href="#">Documentation</a></li>
                            </ul>
                        </div>
                        <div class="footer-column">
                            <div class="column-title">Discover</div>
                            <ul class="footer-ul">
                                <li><a href="#">Tours</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="footer-column contacts-column">
                            <div class="column-title">Contact</div>
                            <ul class="footer-ul">
                                <li>
                                    Call us <br>
                                    <a href="#" class="contacts-link">+1 4676 355 366 33</a>
                                </li>
                                <li>
                                    Write to us <br>
                                    <a href="#" class="contacts-link">info@helodigi.ru</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-column socials-column">
                            <div class="socials">
                                <a href="#" class="soc-link">
                                    <img src="/webtemplate/img/facebook-icon.svg" class="/webtemplate/img-svg" alt="">
                                </a>
                                <a href="#" class="soc-link">
                                    <img src="/webtemplate/img/twitter-soc-icon.svg" class="/webtemplate/img-svg" alt="">
                                </a>
                                <a href="#" class="soc-link">
                                    <img src="/webtemplate/img/behance-icon.svg" class="/webtemplate/img-svg" alt="">
                                </a>
                                <a href="#" class="soc-link">
                                    <img src="/webtemplate/img/facebook-icon.svg" class="/webtemplate/img-svg" alt="">
                                </a>
                                <a href="#" class="soc-link">
                                    <img src="/webtemplate/img/twitter-soc-icon.svg" class="/webtemplate/img-svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-footnote">
                    <p class="text">© 2021 UIpaper. All rights reserved. <br class="br-mob"> <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a></p>
                </div>
            </div>
        </div>
        <div class="overlay" id="overlay"></div>
    </div>
</div>


<div style="display: none;">
    <div class="modal modal_default modal_login" id="modal-login">
        <div class="modal_wrap">
            <h2 class="title">Sign in</h2>
            <div class="modal-form">
              <form method="post" action="{{route('login')}}">

                  @csrf
                  <div class="input-wrap white-label">
                      <input type="email" class="input" placeholder="Email" name="email" required>
                  </div>
                  <div class="input-wrap white-label password-field">
                      <input type="password" class="input password-input" name="password" placeholder="Password">
                      <button class="show-password-btn"></button>
                  </div>

                  <button class="btn submit-btn">
                      <span>Login</span>
                  </button>
              </form>
            </div>

        </div>
        <div class="modal_close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="modal modal_default modal_registration" id="modal-registration">
        <div class="modal_wrap">
            <h2 class="title">Sign up</h2>
            <div class="modal-form">
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Email">
                </div>
                <div class="input-wrap white-label password-field">
                    <input type="password" class="input password-input" placeholder="Password">
                    <button class="show-password-btn"></button>
                </div>
                <div class="agreement">
                    <input type="checkbox" class="agreement-checkbox" id="agree-1">
                    <label for="agree-1" class="agreement-label">
                            <span>
                                I accept the conditions of transmitting information
                            </span>
                    </label>
                </div>
                <button class="btn submit-btn">
                    <span>Sign up</span>
                </button>
                <div class="authorization-socials">
                    <div class="authorization-socials-variants">
                        <div class="socials">
                            <div class="soc-link">
                                <img src="/webtemplate/img/facebook-icon.svg" class="/webtemplate/img-svg" alt="">
                            </div>
                            <div class="soc-link">
                                <img src="/webtemplate/img/twitter-soc-icon.svg" class="/webtemplate/img-svg" alt="">
                            </div>
                            <div class="soc-link">
                                <img src="/webtemplate/img/behance-icon.svg" class="/webtemplate/img-svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-info">
                <p>Have an account? <a href="#modal-login" class="getModal">Sign in your right now.</a></p>
            </div>
        </div>
        <div class="modal_close"></div>
    </div>
</div>


<div style="display: none;">
    <div class="modal modal_default modal_reset" id="modal-reset-password">
        <div class="modal_wrap">
            <h2 class="title">Forgot password?</h2>
            <div class="subtitle">
                Use the e-mail and password that you specified when registering on the site
            </div>
            <div class="modal-form">
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Email">
                </div>
                <button class="btn submit-btn">
                    <span>Reset Password</span>
                </button>
            </div>
            <div class="modal-info">
                <p>Don’t have an account? <a data-href="#modal-registration" class="getModal">Create your own right now.</a></p>
            </div>
        </div>
        <div class="modal_close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="modal modal_default modal_success" id="modal-reset-password-success">
        <div class="modal_wrap">
            <div class="success-icon"></div>
            <h2 class="title">Success</h2>
            <div class="subtitle">
                Your message was successfully sent. We will contact you shortly
            </div>
        </div>
        <div class="modal_close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="modal modal_default modal_order" id="book-now">
        <div class="modal_wrap">
            <h2 class="title">Please fill in this quick form</h2>
            <div class="subtitle">
                Your personal travel expert will get back to you in a few hours to introduce themselves and start planning an exceptional holiday experience with you.
            </div>
            <div class="modal-form">
                <div class="input-wrap date-wrap white-label">
                    <input type="text" class="input js_calendar" placeholder="When would you like to travel?" readonly>
                </div>
                <div class="input-wrap date-wrap white-label">
                    <input type="text" class="input js_calendar" placeholder="When do you plan to come back?" readonly>
                </div>
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Name">
                </div>
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Surname">
                </div>
                <div class="input-wrap white-label">
                    <input type="tel" class="input js-tel" placeholder="Contact Number">
                </div>
                <div class="input-wrap white-label">
                    <input type="email" class="input" placeholder="Email Address">
                </div>
                <div class="input-wrap white-label fullwidth">
                    <textarea class="input textarea" placeholder="More details about your trip"></textarea>
                </div>
                <div class="agreement">
                    <input type="checkbox" class="agreement-checkbox" id="agree-1b">
                    <label for="agree-1b" class="agreement-label">
                            <span>
                                I accept the conditions of transmitting information
                            </span>
                    </label>
                </div>
                <button class="btn submit-btn">
                    <span>Submit</span>
                </button>
            </div>
        </div>
        <div class="modal_close"></div>
    </div>
</div>

<div style="display: none;">
    <div class="modal modal_default modal_order" id="ask-question">
        <div class="modal_wrap">
            <h2 class="title">Ask a question</h2>
            <div class="subtitle">
                Please fill out the form and our manager will contact you
            </div>
            <div class="modal-form">
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Name">
                </div>
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Last name">
                </div>
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Contact Number">
                </div>
                <div class="input-wrap white-label">
                    <input type="text" class="input" placeholder="Email Address">
                </div>
                <div class="input-wrap white-label fullwidth">
                    <textarea class="input textarea" placeholder="Your question"></textarea>
                </div>
                <div class="agreement">
                    <input type="checkbox" class="agreement-checkbox" id="agree-1c">
                    <label for="agree-1c" class="agreement-label">
                            <span>
                                I accept the conditions of transmitting information
                            </span>
                    </label>
                </div>
                <button class="btn submit-btn">
                    <span>Submit</span>
                </button>
            </div>
        </div>
        <div class="modal_close"></div>
    </div>
</div>


<div class="bottom-message success-message" id="success-message">
        <span>
            Thanks! Your subscription <br>has been successfully issued
        </span>
</div>

<div class="bottom-message error-message" id="error-message">
        <span>
            Error occurred
        </span>
</div>
<script src="/webtemplate/js/jquery.min.js"></script>
<script src="/webtemplate/js/checkmode.js"></script>
<script src="/webtemplate/js/slick.min.js"></script>
<script src="/webtemplate/js/jquery.arcticmodal.min.js"></script>
<script src="/webtemplate/js/lightgallery.js"></script>
<script src="/webtemplate/js/jquery.mousewheel.min.js"></script>
<script src="/webtemplate/js/device.min.js"></script>
<script src="/webtemplate/js/jquery.placeholder.label.js"></script>
<script src="/webtemplate/js/jquery-ui.min.js"></script>
<script src="/webtemplate/js/scripts.js"></script>

@include('sweetalert::alert')


</body>

</html>
