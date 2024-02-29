<?php
include_once ("config.php");
session_start();
$email = "";
$newpassword = $_POST['password'];
if(isset($_SESSION['seedmail'])){
    $email = $_SESSION['seedmail'];
    $set="UPDATE user_form SET password ='$newpassword' WHERE email='$email'";
    $result = mysqli_query($conn,$set);
    if($result){
        header('location: login.php');
    }else{
        echo $_SESSION['seedmail'];
        echo $newpassword;
    }
}
?>

