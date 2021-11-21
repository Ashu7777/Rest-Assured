<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank_details');


$EmailID=$_POST['Email_ID'];
$AccountNo=$_POST['Account_No'];
$password=$_POST['Password'];

$FirstName=$_POST['First_Name'];

$s="select*from registration where EmailID = '$EmailID' && password='$password' && AccountNo='$AccountNo'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if ($num==1){
    //$q="select*from registration where FirstName='$FirstName'";
    $_SESSION['username']= $EmailID;
    header('location:accountholders.php');
}
else{
    echo "Login Failed";
    header('location:login.php');
}









?>
