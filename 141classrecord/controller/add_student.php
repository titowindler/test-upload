<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$student_fname=$_POST['firstname'];
	$student_lname=$_POST['lastname'];
	$studentIdNumber=$_POST['idnum'];

	// $image = '';
	// 	//check if file uploaded exists and there are no errors during upload
	// 	if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

	// 		if($_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/jpeg") {

	// 			if($_FILES['image']['type'] < 10000000){
	// 				//define the new location and name of the photo (images/1001_mypic.png)
	// 				$image = "../images/" .$student_fname."_".$_FILES['image']['name'];
	// 				//tell PHP to move the file from where and to where
	// 				move_uploaded_file($_FILES['image']['tmp_name'], $image);	
	// 			}
	// 		}
	// 	}

	$conn=connect();
	
	$sql = "INSERT INTO student (student_id,student_fname,student_lname,studentIdNumber)
	 VALUES (NULL,'$student_fname','$student_lname','$studentIdNumber')";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/view_student.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>