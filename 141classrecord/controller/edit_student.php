<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$id 	= 	$_POST['id'];
	$idnum  =	$_POST['idnum'];
	$fname  =	$_POST['firstname'];
	$lname  =	$_POST['lastname'];


	$conn=connect();

	$sql = "UPDATE student SET `studentIdNumber` = '$idnum', `student_fname` = '$fname', `student_lname` = '$lname'
		WHERE `student_id` = '$id' ";
	
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_student.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>