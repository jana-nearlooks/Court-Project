<?php  
include 'header.php';

?>
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-6 bg-color-15 pad-0 none-992 bg-img"></div>
                <div class="col-lg-6 pad-0 form-info">
                    <div class="form-section align-self-center">
                        <h1>Welcome!</h1>
                        <h3>Sign Into Your Account</h3>
                        <div class="clearfix"></div>
                        <form action="#" method="GET">
                            <div class="form-group form-box">
                                <label for="first_field" class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control" id="first_field" placeholder="Full Name" aria-label="Full Name" required>
                            </div>
                            <div class="form-group form-box">
                                <label for="second_field" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="second_field" placeholder="Email Address" aria-label="Email Address" required>
                            </div>
                            <div class="form-group form-box">
                                <label for="third_field" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" autocomplete="off" id="third_field" placeholder="Password" aria-label="Password" required>
                            </div>
                            <div class="checkbox form-group form-box">
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe" required>
                                        <label class="form-check-label" for="rememberMe">
                                            I agree to the<a href="#" class="terms">terms of service</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn-md btn-theme w-100">Register</button>
                            </div>
                        </form>
                        <!-- <p>Already a member? <a href="login.php">Login here</a></p>
                        <div class="social-list">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-google"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 24 end -->

<?php
    include 'footer.php';
?>