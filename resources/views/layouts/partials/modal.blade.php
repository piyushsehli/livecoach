<div class="signup-modal modal fade" id="signup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="modal-heading">
                            <h2>Sign up</h2>
                        </div>
                        <div class="container signup-content">
                            <div class="row">
                                <div class="col-sm-6 specific-form">
                                    <register-form></register-form>
                                    <div class="row">
                                        <p class="para-login">I'm already a user,<a href="#login-btn" id="login-btn">log in</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-6 specific-btn-con">
                                    <a href="{{ route('login.facebook') }}">
                                        <button class="sign-btn face">Sign up with Facebook</button>
                                    </a>
                                    <a href="{{ route('login.google') }}">
                                        <button class="sign-btn google">Sign up with Google</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="signup-modal modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <div class="modal-heading">
                            <h2>Log in</h2>
                        </div>
                        <div class="container signup-content">
                            <div class="row">
                                <div class="col-sm-6 specific-form">
                                    <login-form></login-form>
                                    <div class="row">
                                        <p class="para-login">Not a user,<a href="#signup" id="sign-up">sign up</a></p>
                                    </div>
                                </div>
                                <div class="col-sm-6 specific-btn-con">
                                    <button class="sign-btn face">Login with Facebook</button>
                                    <button class="sign-btn google">Login up with Google</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>