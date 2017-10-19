<?php
require_once '../config/config.php';
require_once '../class/dbclass.php';
require_once "../class/User.php";

$user = new User();



if($_POST['type']=='login'){
	if($user->login()){
		header('Location: ../index.php');
	}
    else if($user->hr()){
		header('Location: ../hr_index.php');
	}
	else if($user->emp()){
		header('Location: ../emp_index.php');
	}
	
	else{
		$_SESSION['Msg'] = "Inavalid UserName Or Password";
		header('Location: ../login.php');
	}
}


?>