<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$id=$_GET['del'];
	
	$conn=connect();
	
	$sql = "DELETE FROM class WHERE class_id = '$id' ";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_class.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>