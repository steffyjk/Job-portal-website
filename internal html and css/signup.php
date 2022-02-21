<?php
$servername="localhost";
$username="root";
$password="";
$c=new mysqli($servername,$username,$password);
$x = "CREATE DATABASE website_signup";
$c =  mysqli_connect("localhost", "root", "","website_signup");
$y= "CREATE TABLE signup(fullname TEXT(40),emailid TEXT(40),password VARCHAR(40),contact INT(20),gender TEXT(20),age TEXT(20)";
$c->query($y);
$c->query($x);
$fullname = $_POST['fullname'];
$emailid = $_POST['emailid'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$q="INSERT INTO signup(fullname,emailid,password,contact,gender,age) VALUES('$fullname','$emailid','$password','$contact','$gender','$age')";
$c->query($q);
echo " your data is entered successfully :) ";
?>
