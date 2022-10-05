<?php

session_start();

header('location:home.php');

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'clothrecommendation');

$email=$_POST['email'];
$password=$_POST['password'];

$s="select * from userdata where email='$email'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);

if($num==1){
    echo"email already taken";

}
else{
    $reg="insert into userdata (email,password) values('$email','$password')";
    mysqli_query($con,$reg);
    echo"registration successfull";
}


?>