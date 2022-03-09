<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$conn=connect();

	$course_name=$_POST['name'];
	$course_code=$_POST['code'];

	$user_id = $_POST['userid'];
	$sql = "SELECT * FROM user WHERE user_id = $user_id";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)) {
		$fname = $row['user_fname'];
		$lname = $row['user_lname'];
	}
	
	$sql = "INSERT INTO class (class_id,course_name,course_code,teacher_fname,teacher_lname)
	 VALUES (NULL,'$course_name','$course_code','$fname','$lname')";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_class.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>