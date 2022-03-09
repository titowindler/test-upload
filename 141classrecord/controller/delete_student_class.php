<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	
	$class = $_GET['view'];
	$id=$_GET['del'];
	
	$conn=connect();
	
	$sql = "DELETE FROM grade WHERE grade_id = '$id' ";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_student_class.php?view={$class}");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>