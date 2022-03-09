<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$id=$_GET['did'];
	
	$conn=connect();
	
	$sql = "DELETE FROM student WHERE student_id = '$id' ";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_student.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>