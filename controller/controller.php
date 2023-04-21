<?php 
require_once("modal/model.php");
// require_once("sendmail/testSendMail.php");
session_start();
class controller extends model{

public $static_base_url = "http://localhost/bookit/assets/";
public $static_login_url = "http://localhost/bookit/assets/loginassets/";
public $static_admin_url = "http://localhost/bookit/assets/adminassets/";


public function __construct()


{
parent::__construct();
ob_start();


if(isset($_SERVER['PATH_INFO'])){
switch ($_SERVER['PATH_INFO']) {

case '/index':
    include_once("views/header.php");
    include_once("views/mainpage.php");
    include_once("views/footer.php");
    break;

case '/About':
    include_once("views/header.php");
    include_once("views/about.php");
    include_once("views/footer.php");
    break;

case '/App':
    include_once("views/header.php");
    include_once("views/app.php");
    include_once("views/footer.php");
    break;

case '/Blog':
    include_once("views/header.php");
    include_once("views/blog.php");
    include_once("views/footer.php");
    break;



case '/registration';
    include_once("views/registration.php");
    if (isset($_POST['btn-signup'])) {
        
        

    // echo"<pre>";
    // print_r($_REQUEST);
    // echo"<br>";
    array_pop($_REQUEST);
    // echo"<br>";
    // print_r($_REQUEST);
    // echo"<br>";
    // print_r($password=$_REQUEST['password']);
    // array_pop($_REQUEST);
    // echo"<br>";
    // print_r($_REQUEST);
    // echo"<br>";
    // echo $password;
    // $hash = "$password";
    // echo"<br>";
    // echo "Password is:", $hash;
    // echo"<br>";
    // echo "Hashed pass using CRYPT_BLOWFISH: ",
    // password_hash($hash, PASSWORD_BCRYPT);
    // echo "\n";
    // echo"</pre>";
    // //    $newArray=array_merge($_REQUEST,array("   name"=>$name),array("hobby"=>$hobby));
    // include_once("sendmail/testSendMail.php");   
    $res = $this->insert('user',$_REQUEST);
    // echo "<pre>";
    //  print_r($res);
    if ($res['Code'] == "1") {
    // echo "<script>alert('Congratulation !!!!')</script>";
    header("location:login");
}  
    else{
    echo "<script>alert('invalid user')</script>";
    echo "<script>alert('Error while inserting try after sometime !!!!')</script>";
    }
}   
    break;

case '/login':
    include_once("views/login.php");
    if (isset($_REQUEST['btn-signin'])) {
        // include_once("views/noti.php");
    # code...
    // echo "<pre>";
    // print_r($_REQUEST);
    $LoginRes = $this->login($_REQUEST['Username'],$_REQUEST['your_pass']);
    // echo "<pre>";
    // print_r($LoginRes);
    if ($LoginRes['Code'] == 1) {
    // echo "called";
    // echo "<pre>";
    // print_r($LoginRes);
    // exit;
    $_SESSION['UserData'] = $LoginRes['Data'];
    if ($LoginRes['Data']->roll_id == 1) {
    header("location:admindashboard");
    }
    else{
    header("location:userheader");  
    }
    }
    else{
    echo "<script>alert('invalid user')</script>";
}
}
    break;

case '/admindashboard':
    include_once("views/admin/adminheader.php");
    echo "Book It";
    include_once("views/admin/adminfooter.php");
    break;    

case '/allusers':
    $allUsers = $this->select("user");
    //  echo "<pre>";
    //  print_r($allUsers);  
    //  exit;
    include_once("views/admin/adminheader.php");
    include_once("views/admin/allusers.php");
    //  echo"switch testing";
    include_once("views/admin/adminfooter.php");
    break; 

case '/deleteuserdata':
    // echo "data will be deleted...";
    // echo "<pre>";
    print_r($_REQUEST);
    print_r($_REQUEST['userid']);
    $res = $this->delete('user',array("id"=>$_REQUEST['userid']));
    if ($res['Code'] == "1") {
    header("location:allusers");
    }
    else{
    echo "<script>alert('Error while inserting try after sometime !!!!')</script>";
    }
    break;

case '/edituserdata':
    //  print_r($_REQUEST);
    //  print_r($_REQUEST['userid']);
    // exit;    
    $usersDataById = $this->select("user",array("id"=>$_GET['userid']));
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    include_once("views/admin/adminheader.php");
    include_once("views/admin/edituserdata.php");
    include_once("views/admin/adminfooter.php");
    //    $data=array("username"=>$_REQUEST['userid'] );
    // print_r($newArray);
    // $res = $this->update('user',$data,array("id"=>$_REQUEST['userid']));
    if (isset($_POST['btn-update'])) {
    if ($_FILES['prof_pic']['error'] == 0) {
    $image = $_FILES['prof_pic']['name'];
    move_uploaded_file($_FILES['prof_pic']['tmp_name'], "image/$image");
    }
    else{
    $image = $_REQUEST['prof_pic_old'];
}   
    // $name = $_REQUEST['fname']." ".$_REQUEST['lname'];
    $data=array("username"=>$_REQUEST['username'],
    "name"=>$_REQUEST['name'],
    "prof_pic"=>$image,
    "email"=>$_REQUEST['email'],
    "mobile"=>$_REQUEST['mobile']);
    // print_r($data);
    $res = $this->update('user',$data,array("id"=>$_REQUEST['userid']));
    echo "<pre>";
    print_r($res);
    if ($res['Code'] == "1") {
    header("location:allusers");
    }
    else{
    echo "<script>alert('Error while inserting try after sometime !!!!')</script>";
}
}
    break;  

case '/addnewuser':
    include_once("views/admin/adminheader.php");
    include_once("views/admin/addnewuser.php");
    include_once("views/admin/adminfooter.php");
    if (isset($_POST['btn-add'])) {
    // echo"<pre>";
    // print_r($_REQUEST);
    // print_r($_FILES);
    if ($_FILES['prof_pic']['error'] == 0) {
    $image = $_FILES['prof_pic']['name'];
    move_uploaded_file($_FILES['prof_pic']['tmp_name'], "uploads/$image");
    }
    else{
    $image = "default.jpg";
}
    // echo $image;
    // exit;
    // $res = $this->insert('users',array("username"=>"test","password"=>"123","gender"=>"Male","city"=>"1","hobby"=>"Circket,Music"));
    array_pop($_REQUEST);
    // array_pop($_REQUEST);
    $newArray=array_merge($_REQUEST,array("name"=>$name,"prof_pic"=>$image));
    // echo "<pre>";
    // print_r($newArray);
    // echo "</pre>";
    // exit;
    $res = $this->insert('user',$newArray);
    header("location:allusers");
    }
    break;

case '/forgot':
    include_once("views/forgot.php");
    if (isset($_REQUEST['forgot'])) {
    $sendmail= 
    mail();
    $randOTP = rand(1000,9999);
    $mailLink = "http://localhost/bookit/views/updatepassword";
    $data = array("otp"=>$randOTP);
    $res = $this->update('user',$data,array("email"=>$_REQUEST['email']));
    }
    break; 

case '/updatepassword':
    include_once("views/admin/adminheader.php");
    include_once("views/admin/adminfooter.php");
    if (isset($_REQUEST['updatepwd'])) {
    $MatchDataOTP = $this->select("user",array("otp"=>$_REQUEST['otp'],"email"=>$_REQUEST['email']));
    $data = array("otp"=>$randOTP);
    if ($MatchDataOTP['Code'] == 1) {
    $res = $this->update('user',$data,array("password"=>$_REQUEST['password'],"otp"=>""));
    } 
    else{
    echo "Invalid OTP";
}
}
    break;  

case '/userheader':
    require_once("views/userheader.php");
    require_once("views/mainpage.php");
    require_once("views/footer.php");
    break;

case '/editprofile':
    // require_once("views/header.php");
    require_once("views/editprofile.php");  
    //require_once("views/footer.php");
    break;

case '/ajaxcrud':
    include_once("views/admin/adminheader.php");
    include_once("views/admin/ajaxcrud.php");
    include_once("views/admin/adminfooter.php");
    break;

case '/booking':    
    // include_once("views/header.php");
    include_once("views/booking.php");
    include_once("views/footer.php");
    break;

case '/noti':
    include_once("views/noti.php");
    break;

case '/payment':
    include_once("views/payment.php");
    break;


    default:
    # code...
    break;
}
} 
else {
header("location:index");
}
ob_flush();
} 
}
$controller = new controller;
?>