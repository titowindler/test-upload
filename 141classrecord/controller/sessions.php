<?php
session_start();

function setSession($id,$username,$fname,$lname,$email,$usertype){
	$_SESSION["user_id"] = $id;
	$_SESSION["user_username"] = $username;
	$_SESSION["user_fname"] = $fname;
	$_SESSION["user_lname"] = $lname;
	$_SESSION["user_email"] = $email;
	$_SESSION["user_type"] = $usertype;
	
}


function unsetSession(){
	session_unset();
	session_destroy(); 
}

?>