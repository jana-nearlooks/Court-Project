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
                        <form id="register_form">
                            <div class="form-group form-box">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input name="full_name" type="text" class="form-control" id="full_name" placeholder="Full Name" aria-label="Full Name">
                            </div>
                            <div class="form-group form-box">
                                <label for="email" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email Address" aria-label="Email Address">
                            </div>
                            <div class="form-group form-box">
                                <label for="password" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" autocomplete="off" id="password" placeholder="Password" aria-label="Password">
                            </div>
                            <div class="checkbox form-group form-box">
                                <div class="">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="terms" name="terms">
                                        <label class=" form-check-label" for="rememberMe">
                                            I agree to the<a href="javascript:void(0);" class="terms">terms of service</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div id="terms_error" class=" terms_error text-danger errors"></div>
                            
                            <div class="form-group clearfix">
                                <button type="submit" class="btn-md btn-theme w-100">Register</button>
                            </div>
                        </form>
                        <p>Already a member? <a href="login.php">Login here</a></p>
                        <!-- <div class="social-list">
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

<script>
$(document).ready(function(){
    $('#register_form').validate({
        rules: {
            full_name: {
                required: true,
                // maxlength: 1,
            },
            email: {
                required: true,
                email:true,
            },
            password:{
                required:true
            },
            terms: {
                required: function() {
                    return $('input[name="terms"]:checked').length === 0;
                },
            },   
        },
        messages: {
            full_name: {
                required: "Full name is required",
            },
            email:{
                required: "Email is required",
            },
            password:{
                required: "Password is required",
            },
            terms: {
                required: "Agree terms and conditions",
            },
        },
        errorClass: "text-danger",
        // errorPlacement: function (error, element) {
        //     if (element.attr("name") == "terms") {
        //         error.insertAfter($('#terms_error'));
        //     } else {
        //         // something else if it's not a checkbox
        //         error.insertAfter(element);
        //     }
        // },
        
        submitHandler: function (form) {
            event.preventDefault();
            var formData = new FormData($(form)[0]);
        
            $.ajax({
                url: "Auth/signup.php",
                method:"POST",
                data:formData,
                cache:false,
                contentType:false,
                processData:false,

                success:function(data){
                    console.log(data);
                    var response = JSON.parse(data);
                    if(response.status == "success"){
                        toastr[response.status](response.message);
                        setTimeout(function(){
                            form.reset();
                            window.location.href="login.php";
                        },3000);             
                    }else{
                        toastr[response.status](response.message);
                    }
                }
            });
        }
    });
});

</script>