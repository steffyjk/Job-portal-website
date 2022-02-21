<?php
session_start();
$host ='localhost';
$user= 'root';
$pass='';
$db='website_login';

//connection
$con = mysqli_connect($host, $user, $pass,$db);
if(!$con){
die("Connection failed:".mysqli_connect_error());
echo 'Server not Connected';
}
if(!mysqli_select_db($con, $db)){
echo 'Database not connected';
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM login WHERE username = '$username' AND
password ='$password'";
$result=mysqli_query($con, $sql) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if($count>0){
 while($res=mysqli_fetch_array($result))
 {
 $_SESSION["user"]=$res[1];
 }
 header('location:welcome.php');
}
else{
 echo "Invalid username/password!";
}
?>
