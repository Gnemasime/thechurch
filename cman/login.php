<?php
include ('conn.php'); ?>

<?php
if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$login_query=mysqli_query($conn,"select * from members where mobile='$username' and password='$password'");
$count=mysqli_num_rows($login_query);
$row=mysqli_fetch_array($login_query);


if ($count > 0){
session_start();
$_SESSION['id']=$row['id'];
header('location:members/dashboard.php');

}else{
	header('location:index.php');
}
}
/*
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$username=$_POST['username'];
    $password=$_POST['password'];

	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);

	$login_query = "Select* from members where mobile = '$username' and password = '$password'";
	$count = mysqli_query($conn,$login_query);

	if(mysqli_num_rows($count) == 1 ){
	
		header ("Location: members/dashboard.php");
	}else {
		echo "<script> alert('Wrong mobile number or password') </script>";
		header ("Location: index.php");
	}

	mysqli_free_result($count);
	
}*/
?>