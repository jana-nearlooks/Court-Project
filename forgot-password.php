<?php 

include 'header.php'; 

?>
        <div class="container">
            <div class="row login-box">
                <div class="col-lg-6 bg-img"></div>
                <div class="col-lg-6 form-info">
                    <div class="form-section align-self-center">
                        <h1>Welcome!</h1>
                        <h3>Recover Your Password</h3>
                        <div class="clearfix"></div>
                        <form id="forget_password">
                            <div class="form-group form-box">
                                <label for="first_field" class="form-label">Email address</label>
                                <input name="email" type="email" class="form-control" id="first_field" placeholder="Email Address" aria-label="Email Address">
                            </div>
                            <div class="form-group clearfix">
                                <button type="submit" class="btn-md btn-theme w-100">Send Me Email</button>
                            </div>
                        </form>
                        <p>Already a member? <a href="login.php">Login here</a></p>
                     
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
    $('#forget_password').validate({
        rules: {
            email: {
                required: true,
                email:true,
            }
        },
        messages: {
            email:{
                required: "Email is required",
            }
        },
        errorClass: "text-danger",        
        submitHandler: function (form) {
            event.preventDefault();
            var formData = new FormData($(form)[0]);
        
            $.ajax({
                url: "Auth/reset_password.php",
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