<?php
class User extends MySQLCN{
 	function login() {
 		if($_POST['UserName'] == NULL || $_POST['Password'] == NULL){
 			return false;
 		}
 		$qry = "SELECT * 
 				FROM admin 
 				WHERE UserName = '{$_POST['UserName']}' AND Password = '{$_POST['Password']}' AND Type = '{$_POST['pass']}'  ";
		$result = $this->select($qry);
		if($result != NULL){
			$_SESSION['UserID'] = $result[0]['UserID'];
			$_SESSION['UserName'] = $result[0]['UserName'];
			return true;
		}else{
			return false;
		}
 	}
	
	function hr() {
 		if($_POST['UserName'] == NULL || $_POST['Password'] == NULL){
 			return false;
 		}
 		$qry = "SELECT * 
 				FROM hr
 				WHERE UserName = '{$_POST['UserName']}' AND Password = '{$_POST['Password']}' AND Type = '{$_POST['pass']}'  ";
		$result = $this->select($qry);
		if($result != NULL){
			$_SESSION['UserID'] = $result[0]['UserID'];
			$_SESSION['UserName'] = $result[0]['UserName'];
			return true;
		}else{
			return false;
		}
 	}
	
	function emp() {
 		if($_POST['UserName'] == NULL || $_POST['Password'] == NULL){
 			return false;
 		}
 		$qry = "SELECT * 
 				FROM emp
 				WHERE UserName = '{$_POST['UserName']}' AND Password = '{$_POST['Password']}' AND Type = '{$_POST['pass']}'  ";
		$result = $this->select($qry);
		if($result != NULL){
			$_SESSION['UserID'] = $result[0]['UserID'];
			$_SESSION['UserName'] = $result[0]['UserName'];
			return true;
		}else{
			return false;
		}
 	}
	
	
	
	
}
?>