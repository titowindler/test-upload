<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>
<?php

if(isset($_POST['login'])){
	userLogin();
}


// Logging In A New User
function userLogin(){
	$username=$_POST['username'];
	$password= $_POST['password'];
	$secret = "secretAdmin";
	$conn=connect();
	$sql = "SELECT * FROM user WHERE user_username='$username' AND user_password='$password' AND user_status = '1' LIMIT 1";
	$result= mysqli_query($conn,$sql);


	 if (mysqli_num_rows($result) > 0) {
    
	 	while($row = mysqli_fetch_assoc($result)) {
			setSession($row['user_id'],$row['user_username'],$row['user_fname'],$row['user_lname'],$row['user_email'],$row['user_type'],$secret);
			 header('Location:../views/view_student.php');
	 	}
	 } else {
		$error =  "Incorrect Username and/or Password!";
	 	 header('Location:../views/index.php?error='.$error);
	 }
	 	mysqli_close($conn);
}

?>
