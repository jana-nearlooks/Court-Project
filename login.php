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
                        <form id="login_form">
                            <div class="form-group form-box">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" aria-label="Email Address">
                            </div>
                            <div class="form-group form-box">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" autocomplete="off" id="password" placeholder="Password" aria-label="Password">
                            </div>
                            <div class="checkbox form-group form-box">
                                <div class="form-check checkbox-theme">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe" required>
                                    <label class="form-check-label" for="rememberMe">
                                        Remember me
                                    </label>
                                </div>
                                <a href="forgot-password.php" class="forgot-password">Forgot Password</a>
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn-md btn-theme w-100">Login</button>
                            </div>
                        </form>
                        <!-- <p>Don't have an account? <a href="register.php">Register here</a></p>
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

<?php include 'footer.php'; ?>

<script>
    $(document).ready(function(){
        $('#login_form').submit(function(e){
            e.preventDefault();
            var form = $(this);
            var formData = new FormData(form[0]);

            $.ajax({
                url:"Auth/auth.php",
                method:"POST",
                data:formData,
                contentType:false,
                processData:false,
                cache:false,

                success:function(data){

                }
            });

        });
    });
</script>