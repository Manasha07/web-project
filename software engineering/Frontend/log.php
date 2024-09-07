<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'bbl');

$Username = $_POST['username'];
$Password = $_POST['password'];

$Username = stripcslashes($Username);
$Password = stripcslashes($Password);

$s = "select * from user_info where Username = '$Username' && Password = '$Password'";

$result = mysqli_query($con, $s);
$rnum = mysqli_num_rows($result);

if($Username=='Admin' and $Password=='admin1234'){
    echo"
    <script> 
    alert('Admin Login successfully');
    window.location.href='./admin.php'
    </script> ";
    
}else{
if($rnum == 1){
    $_SESSION['username']=$Username;
   echo"
   <script> 
   alert('Login successfully');
   window.location.href='./index.php'
   </script> ";
} 

else{
    echo"
    <script>
    alert('Invalid username / Email / password');
    window.location.href='./login.php';
    </script>
    ";
}}
?>