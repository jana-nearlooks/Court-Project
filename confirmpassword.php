<?php 
    include 'header.php';
    $email = base64_decode($_GET['secret']);
    $token = $_GET['token'];
?>
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-6 bg-img"></div>
                <div class="col-lg-6 form-info">
                    <div class="form-section align-self-center">
                        <h1>Welcome!</h1>
                        <h3>Recover Your Password</h3>
                        <div class="clearfix"></div>
                        <form id="update_password">
                            <div class="form-group form-box">
                                <label for="first_field" class="form-label">Enter New Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password" aria-label="Email Address">
                                <input type="hidden" name="email" id="email" value="<?php echo $email; ?>">
                                <input type="hidden" name="token" id="token" value="<?php echo $token; ?>">
                            </div>
                            <div class="form-group form-box">
                                <label for="first_field" class="form-label">Confirm New Password</label>
                                <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Password" aria-label="Email Address">
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn-md btn-theme w-100">Submit</button>
                            </div>
                        </form>
                        <!-- <p>Already a member? <a href="login.html">Login here</a></p> -->
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login 24 end -->

<?php  include 'footer.php'; ?>

<script>
$(document).ready(function(){
    $('#update_password').validate({
        rules: {
            password: {
                required: true,
            },
            password_confirmation:{
                required:true,
                equalTo:"#password"
            }
        },
        messages: {
            password:{
                required: "Password is required",
            },
            password_confirmation:{
                required: "Confirm password is required",
                equalTo:"Password mismatch...!"
            }
        },
        errorClass: "text-danger",        
        submitHandler: function (form) {
            event.preventDefault();
            var formData = new FormData($(form)[0]);
        
            $.ajax({
                url: "Auth/update_password.php",
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