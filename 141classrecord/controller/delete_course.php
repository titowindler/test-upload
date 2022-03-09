<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$id=$_GET['did'];
	
	$conn=connect();
	
	$sql = "DELETE FROM course WHERE course_id = '$id' ";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_course.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>