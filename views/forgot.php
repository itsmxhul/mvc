<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo $this-> static_login_url;?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo $this-> static_login_url;?>css/style.css">
</head>
<body>

<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                   

                    <div class="signin-form">
                        <h2 class="form-title">Reset Password</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="email" placeholder="email"/>
                            </div>
                
                                <!-- <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                                -->
                                <!-- <div class="form-group">
                                <label for="otp"><i class="zmdi zmdi-smartphone-android"></i></label>
                                <input type="text" name="otp" id="otp" placeholder="otp"/>
                            </div>   -->
                            <div class="form-group form-button">
                                <input type="submit" name="submit-btn" id="submit-btn" class="form-submit" value="submit"/>
                            </div>
                        </form>
                       <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    
    <!-- JS -->
    <script src="<?php echo $this-> static_login_url;?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $this-> static_login_url;?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>