<?php
session_start();
if(isset($_SESSION['admin']))
{
    @header('location:index.php');
//echo "Asad :".$_SESSION['admin'];
}
else{
    // echo "".$_SESSION['admin'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Element New |Admin Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div style="background-image: url('assets/background.jpg');" class="limiter">
    <div  class="container-login100">
        <div class="row">
            <div class="leftbar-100">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
            </div>
            <div class="wrap-login100">
                <div class="login100-form-title p-t-20 p-b-11 p-l-60 p-r-60">
                    Sign in to continue
                </div>
                <span class="login100-form-title">
						<ul id="myDIV" class="p-l-60 nav nav-tabs auth-toggle m-b-0">
							<a class=" login btn active " href="#login" data-toggle="tab"aria-expanded="true">Login
							</a>
						</ul>
				</span>
                <form class="login100-form validate-form flex-sb flex-w  p-l-60 p-r-60 p-t-15 p-b-15">


					<span class="txt1 p-b-11">
						<h6>Admin Login</h6>
					</span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                        <input class="input100" id="email" type="email" name="email" >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
						<h6>Password</h6>
					</span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
                        <input class="input100" id="password" type="password" name="password" >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-15">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt3">
                                Forgot Password?
                            </a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <a id="signin"><button class="login100-form-btn">
                                Continue
                            </button></a>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<!--<script src="assets/js/main.js"></script>-->
<script src="assets/js/login.js"></script>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("myDIV");
    var btns = header.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

</body>
</html>