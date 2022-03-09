<?php
require("connection.php");

function getScorePreMid($selectedVal) {
	$conn = connect();

    $class = $_POST['class'];
    $grade = $_POST['grade'];
    
    $sql = "SELECT as_premid AS actualscore, ps_premid AS perfectscore FROM grade WHERE classID = '$class' AND grade_id = '$grade'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
   
}

function getScoreMidterm($selectedVal) {
 	$conn = connect();

    $class = $_POST['class'];
    $grade = $_POST['grade'];
    
    $sql = "SELECT as_midterm AS actualscore, ps_midterm AS perfectscore FROM grade WHERE classID = '$class' AND grade_id = '$grade'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);  
}

function getScorePreFinal($selectedVal) {
    $conn = connect();

    $class = $_POST['class'];
    $grade = $_POST['grade'];
    
    $sql = "SELECT as_prefinal AS actualscore, ps_prefinal AS perfectscore FROM grade WHERE classID = '$class' AND grade_id = '$grade'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
}

function getScoreFinal($selectedVal) {
    $conn = connect();

    $class = $_POST['class'];
    $grade = $_POST['grade'];
    
    $sql = "SELECT as_final AS actualscore, ps_final AS perfectscore FROM grade WHERE classID = '$class' AND grade_id = '$grade'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
}   



if ($_POST['exam'] == 'premid'){
    //call the function or execute the code
    getScorePreMid($_POST['exam']);

}

if ($_POST['exam'] == 'midterm'){
    //call the function or execute the code
    getScoreMidterm($_POST['exam']);
}

if ($_POST['exam'] == 'prefinal'){
    //call the function or execute the code
    getScorePreFinal($_POST['exam']);
}

if ($_POST['exam'] == 'final'){
    //call the function or execute the code
    getScoreFinal($_POST['exam']);
}