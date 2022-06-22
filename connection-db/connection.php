<?php
$conn= mysqli_connect('localhost','root','','lrms_db');
if(!$conn){
	echo "Connection Failed";
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$file=$_POST['file'];
$password=$_POST['password'];
$option=$_POST['option'];
$answer=$_POST['answer'];

// Insert Data

$sql="INSERT INTO `registration`(`fname`, `lname`, `email`, `img`, `pswd`, `options`, `answer`) VALUES ('$fname','$lname','$email','$file',PASSWORD('$password'),'$option','$answer')";
$ins=mysqli_query($conn,$sql);
if($ins){
    // echo "Details recorded";
    header("Location:../index.php");
}
?>