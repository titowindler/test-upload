<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$conn=connect();

	$student=$_POST['student'];
	$class=$_POST['class'];

	$sql = "INSERT INTO grade (grade_id,studentID,classID,premid,midterm,prefinal,final,finalgrade)
	 VALUES (NULL,'$student','$class',0,0,0,0,0)";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_student_class.php?view={$class}");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>