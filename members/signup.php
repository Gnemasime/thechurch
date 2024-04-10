<?php include ('../database/conn.php'); ?>  

<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$email=$_POST['email'];
    $password=$_POST['password'];

	$username = mysqli_real_escape_string($conn, $email);
	$password = mysqli_real_escape_string($conn, $password);

	$login_query = "SELECT* from members where email = '$email' ";
	$count = mysqli_query($conn,$login_query);

	if(mysqli_num_rows($count) == 1 ){
	
		echo "<script> alert('Email already exist') </script>";
	}else {
		$login_query = "INSERT INTO members(name,surname,email,cell,password)
        VALUES('$name','$surname','$email','$cell','$password')" or die(mysqli_error());
		
	}

	mysqli_free_result($count);
	
}
?>