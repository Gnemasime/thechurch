<?php include ('../database/conn.php'); ?>  

<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$email=$_POST['email'];
    $password=$_POST['password'];

	$username = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);

	$login_query = "Select* from members where email = '$email' and password = '$password'";
	$count = mysqli_query($conn,$login_query);

	if(mysqli_num_rows($count) == 1 ){
	
		header("Location: members/index.php");
	}else {
		echo "<script> alert('Wrong mobile number or password') </script>";
		
	}

	mysqli_free_result($count);
	
}
?>