<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'sendmail/vendor/autoload.php';

// if (isset($_POST["btn-signup"])) {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $mail = new PHPMailer(true);
//     try {
//         $mail->SMTPDebug = 0;
//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = "ibook4462@gmail.com";
//         $mail->Password ="vfafcfgoiijqmtgt";
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//         $mail->Port =587;
//         $mail->setFrom('ibook4462@gmail.com', 'Bookit');
//         $mail->addAddress($_POST['email']);   // Add a recipient
//         $mail->isHTML(true);  // Set email form
//         $activationcode = substr(number_format(time()*rand(), 0 , '','',),0,6);
//         $mail->Subject = 'Email Verification';
//         $mail->body = '<p>your code is:<b style="font-size:30px;">'
//                         $activationcode .'</b></p>';

//                         $mail->send();
                        

//         $connection = mysqli_connect("localhost","root","","users");
//         $sql="insert into users (name,email,password,activationcode) values (0"







//     } catch (\Throwable $th) {

//     }
// }





?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo $this-> static_login_url;?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo $this-> static_login_url;?>css/style.css">
</head>
<body>

<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                                <label for="profile"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="file" name="prof_pic" id="prof_pic" placeholder="profile"/>
                            </div>
                        <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile "><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="mobile" id="mobile" placeholder="Mobile Number"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                                <?php

// $pass = "";
// echo "Password is:", $pass;

// echo "Hashed pass using CRYPT_BLOWFISH: ",
// 	password_hash($pass, PASSWORD_BCRYPT);
// echo "\n";
?>
 
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                            <button type="submit"  name="btn-signup" id="btn-signup" class="btn btn-primary">Register</button>
                                
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo $this-> static_login_url;?>images/regi2.jpg" alt="sing up image"></figure>
                        <a href="login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    
    <!-- JS -->
    <script src="<?php echo $this-> static_login_url;?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $this-> static_login_url;?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</div>
<?php
        // if (isset($_POST['btn-signup']))
        {
            // print_r($_REQUEST);
            // echo"<pre>";
            
//             $email=print_r($_REQUEST['email']);
            
//             echo"<br>";
            
//             // $username=print_r($_REQUEST['username']);
            
//             echo"<br>";
//             include_once("sendmail/testSendMail.php");
            
//             require 'vednor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require 'sendmail/vendor/autoload.php';

// if (isset($_POST["btn-signup"])) {
// $name = $_POST["name"];
// $email = $_POST["email"];
// $password = $_POST["password"];

// $mail = new PHPMailer(true);
// try {
// $mail->SMTPDebug = 0;
// $mail->isSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = "ibook4462@gmail.com";
// $mail->Password ="vfafcfgoiijqmtgt";
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// $mail->Port =587;
// $mail->setFrom('ibook4462@gmail.com', 'Bookit');
// $mail->addAddress($_POST['email']);   // Add a recipient
// $mail->isHTML(true);  // Set email form
// $activationcode = substr(number_format(time()*rand(), 0 , '','',),0,6);
// $mail->Subject = 'Email Verification';
// $mail->body = '<p>your code is:<b style="font-size:30px;">';

//             $mail->send();
    



//             echo"</pre>";
//         }
// }
        }

    
        ?>
<div>
</html>