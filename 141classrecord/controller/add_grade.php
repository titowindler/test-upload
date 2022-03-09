<?php require('connection.php'); ?>
<?php require('sessions.php'); ?>

<?php

	$conn=connect();

	$grade=$_POST['grade'];
	$class=$_POST['class'];


	$as = $_POST['as'];
	$ps = $_POST['ps'];
	$passing_score = ($ps*0.60);

	// if selection is pre midterm
	if($_POST['exam'] == 'premid'){

		$as_premid = $_POST['as'];
		$ps_premid = $_POST['ps'];

			if ($as >= $passing_score) {

	  //passing grade
	  $fp = ($ps - $passing_score);
	  $sp = ($ps - $as)*2;
	  $tp = $fp + $sp;
	  $get_pass = $tp/($ps - $passing_score);
	 
	  $sql_pass = "UPDATE grade SET `as_premid` = '$as_premid', `ps_premid` = '$ps_premid', `premid` = '$get_pass' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
	  $result_pass = mysqli_query($conn,$sql_pass);

	  if($result_pass){
	 	   header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
	   }else{
		 echo "Error in this part of code for premidterm pass!"; 	
	   }

	} else {

    //failing grade
    $ff = ($passing_score - 1);
    $sf = $as*1.9;
    $tf = ($ff*5)-$sf;
    $ftf = $passing_score-1;
    $get_fail = $tf/$ftf;

     $sql_fail = "UPDATE grade SET `as_premid` = '$as_premid', `ps_premid` = '$ps_premid',  `premid` = '$get_fail' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
    $result_fail = mysqli_query($conn,$sql_fail);
  
		    if($result_fail){
		           header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
		     }else{
		          echo "Error in this part of code for premidterm fail!"; 	
         }
	  } 
   }

	// if selection is midterm
	if($_POST['exam'] == 'midterm'){

		$as_midterm = $_POST['as'];
		$ps_midterm = $_POST['ps'];

		if ($as >= $passing_score) {

	  //passing grade
	  $fp = ($ps - $passing_score);
	  $sp = ($ps - $as)*2;
	  $tp = $fp + $sp;
	  $get_pass = $tp/($ps - $passing_score);
	 
	  $sql_pass = "UPDATE grade SET `as_midterm` = '$as_midterm', `ps_midterm` = '$ps_midterm', `midterm` = '$get_pass' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
	  $result_pass = mysqli_query($conn,$sql_pass);

	  if($result_pass){
	 	   header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
	   }else{
		 echo "Error in this part of code for midterm pass!"; 	
	   }

	} else {

    //failing grade
    $ff = ($passing_score - 1);
    $sf = $as*1.9;
    $tf = ($ff*5)-$sf;
    $ftf = $passing_score-1;
    $get_fail = $tf/$ftf;

     $sql_fail = "UPDATE grade SET `as_midterm` = '$as_midterm', `ps_midterm` = '$ps_midterm', `midterm` = '$get_fail' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
    $result_fail = mysqli_query($conn,$sql_fail);
  
		    if($result_fail){
		           header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
		     }else{
		          echo "Error in this part of code for midterm fail!"; 	
         }
	  } 
		
	}

	// if selection is prefinal
	if($_POST['exam'] == 'prefinal'){

		$as_prefinal = $_POST['as'];
		$ps_prefinal = $_POST['ps'];

			if ($as >= $passing_score) {

	  //passing grade
	  $fp = ($ps - $passing_score);
	  $sp = ($ps - $as)*2;
	  $tp = $fp + $sp;
	  $get_pass = $tp/($ps - $passing_score);
	 
	  $sql_pass = "UPDATE grade SET `as_prefinal` = '$as_prefinal', `ps_prefinal` = '$ps_prefinal', `prefinal` = '$get_pass' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
	  $result_pass = mysqli_query($conn,$sql_pass);

	  if($result_pass){
	 	   header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
	   }else{
		 echo "Error in this part of code for prefinal pass!"; 	
	   }

	} else {

    //failing grade
    $ff = ($passing_score - 1);
    $sf = $as*1.9;
    $tf = ($ff*5)-$sf;
    $ftf = $passing_score-1;
    $get_fail = $tf/$ftf;

     $sql_fail = "UPDATE grade SET `as_prefinal` = '$as_prefinal', `ps_prefinal` = '$ps_prefinal', `prefinal` = '$get_fail' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
    $result_fail = mysqli_query($conn,$sql_fail);
  
		    if($result_fail){
		           header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
		     }else{
		          echo "Error in this part of code for prefinal fail!"; 	
         }
	  } 
	}

	// if selection is final
	if($_POST['exam'] == 'final'){

		$as_final = $_POST['as'];
		$ps_final = $_POST['ps'];

			if ($as >= $passing_score) {

	  //passing grade
	  $fp = ($ps - $passing_score);
	  $sp = ($ps - $as)*2;
	  $tp = $fp + $sp;
	  $get_pass = $tp/($ps - $passing_score);
	 
	  $sql_pass = "UPDATE grade SET `as_final` = '$as_final', `ps_final` = '$ps_final', `final` = '$get_pass' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
	  $result_pass = mysqli_query($conn,$sql_pass);

	  if($result_pass){
	 	   header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
	   }else{
		 echo "Error in this part of code for final pass!"; 	
	   }

	} else {

    //failing grade
    $ff = ($passing_score - 1);
    $sf = $as*1.9;
    $tf = ($ff*5)-$sf;
    $ftf = $passing_score-1;
    $get_fail = $tf/$ftf;

     $sql_fail = "UPDATE grade SET `as_final` = '$as_final', `ps_final` = '$ps_final', `final` = '$get_fail' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
    $result_fail = mysqli_query($conn,$sql_fail);
  
		    if($result_fail){
		           header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
		     }else{
		          echo "Error in this part of code for final fail!"; 	
         }
	  } 
	}

	// if selection is none
	if($_POST['exam'] == 'none'){
		header("location:../views/view_student_grade.php?view={$class}&g={$grade}");
	}



$sql_final =  "SELECT * FROM grade WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
$sql_result = mysqli_query($conn,$sql_final);
$sql_row = mysqli_fetch_assoc($sql_result);

$premid = $sql_row['premid']*.20;
$midterm = $sql_row['midterm']*.20;
$prefinal = $sql_row['prefinal']*.20;
$final = $sql_row['final']*.40;

$compute_final = $premid + $midterm + $prefinal + $final; 

$final_grade_sql = "UPDATE grade SET `finalgrade` = '$compute_final' WHERE `grade_id` = '$grade' AND `classID` = '$class' ";
mysqli_query($conn,$final_grade_sql);



?>