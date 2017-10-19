<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
$record_date = gmdate('d-M-Y', strtotime('+6 hours'));
$record_time = gmdate('h:i:s A', strtotime('+6 hours'));

?>

<!DOCTYPE html>

<html>

    <head>
        <?php @require_once 'config/commonJS.php'; ?>
		
		<title>Employees Attendance</title>
    </head>
	
    <body>
	<style>   
	
		#left {   
		width:44%;
		height:256px;
		float:left;

		}
		
		#right
		{ 
		width:55%;
		height:256px;
		float:right;
		}
	
	</style>
	
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once '../menu/header.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/admin_menu.php'; ?>
			
			
 
			
<div id="content-wrap">
<div id="main">
<?php echo $_SESSION['Msg']; ?>
<br>
<h1 align="center">Employee Attendance</h1>					
<br><br>
<div id="left">

<form method="post" action="ad_employee_attendance.php">
<center>
<table class="tbl" width="480px" height="180px">
<tr>
<td><b>Employee ID</b></td>
<td><input type="text" name="id"></td>
<td><input type="submit" value="Search" name="search"></td>	
</tr>
</table>
<br><br>
							
</center>		
</form>
</div>					
					

					
<div id="right">				
<form method="post" action="ad_employee_attendance.php">						

<?php
include('../class/db_p.php');

$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con, $db_name)or die("cannot select DB");




if(isset($_POST['search'])){

$eid=$_POST['id'];	


if($eid==''){
		echo"<script>alert('Please Insert Employee ID!!!')</script>";
		exit();
 }	    
else
{
		
	
$sql=mysqli_query($con, "SELECT EmployeeName FROM employee WHERE `EmpID`= '$eid' ") or die(mysql_error());
	

if($sql)
{
            while($row = mysqli_fetch_array( $sql )) 
				 {
		           $NameofEmployee = $row['EmployeeName'];
				 }	

echo '<center>';	
echo '<table class="tbl" width="480px" height="180px">';

echo '<tr>';
echo '<td>'.'<b>Employee ID</b>'.'</td>';
echo '<td>'.'<input type="text" name="id" id="id" value='.$eid.'>'.'</td>';			
echo '</tr>';						
						
echo '<tr>';
echo '<td>'.'<b>Employee Name</b>'.'</td>';
echo '<td>'.'<input type="text" name="name" id="name" value='.$NameofEmployee.'>'.'</td>';			
echo '</tr>';							
						
echo '<tr>';
echo '<td>'.'<b>Date</b>'.'</td>';
echo '<td>'.'<input type="text" name="con_date" id="con_date" value='.$record_date.' readonly>'.'</td>';		
echo '</tr>';


echo '<tr>';
echo '<td>'.'<b>Time</b>'.'</td>';
echo '<td>'.'<input type="text" name="con_time" id="con_time" value='.$record_time.' readonly>'.'</td>';		
echo '</tr>';


echo'<tr><td><b>Status</b></td>';
echo'<td><select name="type" id="type">
<option value="In Time">In Time</option>
<option value="Late Arrival">Late Arrival</option>
<option value="Early Leave">Early Leave</option>
<option value="Accurate Leave">Accurate Leave</option>
</select></td></tr>';

echo '</table>';

echo '<br>'.'<br>';

echo '<button class="btn-info-1"  name="submit1"/>Check In</button>';
echo '<br>'.'<br>';
echo '<button class="btn-info-2"  name="submit2"/>Check Out</button>';													
							
echo '</center>';

							
}
else
{
echo "<script>alert('Database error!')</script>";
}
}
}
?>								
</form>
</div>					

				


				
				
				
</div>
</div>
			
<!--footer starts here-->
<?php @require_once '../menu/footer.php'; ?>
<!-- wrap ends here -->
</div>	
</body>
	
</html>







<!--Inserting checking data-->

<?php

include('../class/db_p.php');


	
	
// Connect to server and select database.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con, $db_name)or die("cannot select DB");


// Get values from form 
$eid=$_POST['id'];
$ename=$_POST['name'];



$DateTime = gmdate('h:i:s A', strtotime('+6 hours'));
$con_date=$_POST['con_date']; 

$status=$_POST['type'];



if(isset($_POST['submit1']))

{



// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO empcheckin (EmpID, EmpName, Date, EntryTime, EntryStatus) VALUES('$eid', '$ename', '$con_date', '$DateTime','$status')");



if($sql){
	echo "<script type='text/javascript'>";
	echo "alert(' $ename Check-In Approved At $record_time ')"; 
	echo "</script>";
}


}

else if(isset($_POST['submit2'])){


// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO empcheckout (EmpID, EmpName, Date, ExitTime, ExitStatus) VALUES('$eid', '$ename', '$con_date', '$DateTime', '$status')");



if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('$ename Check-Out Approved At $record_time')"; 
	echo "</script>";
}
}
?>


















<?php
error_reporting(0);
include_once 'home.php';
include_once 'dbconnect.php';
$record_date = gmdate('d-M-Y', strtotime('+6 hours'));
$record_time = gmdate('h:i:s A', strtotime('+6 hours'));
if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$us = $userRow['user_id'];
$res=mysql_query("SELECT * FROM users WHERE user_id=".$us);
$userRow=mysql_fetch_array($res);
$query = "SELECT userid, SUM(amount) FROM earn GROUP BY $us"; 	 
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
	echo "add amount of ". $us. " account is = $". $value1 =$row['SUM(amount)'];
	$value1 =$row['SUM(amount)'];
echo "<br />";
$query = "SELECT userid, SUM(amount) FROM lost GROUP BY $us"; 	 
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
	echo "Sending amount of ". $us. " account is = $". $value2 =$row['SUM(amount)']; 
	$value2 =$row['SUM(amount)'];
echo "<br />";
  $value=$value1-$value2;
echo "total amount of ".$us. " account is = $". $value;
echo '<tr><br />';
echo '<td>'.'<b>Date</b>'.'</td>';
echo '<td>'.'<input type="text" name="con_date" id="con_date" value='.$record_date.' readonly>'.'</td>';		
echo '</tr><br />';
echo '<tr>';
echo '<td>'.'<b>Time</b>'.'</td>';
echo '<td>'.'<input type="text" name="con_time" id="con_time" value='.$record_time.' readonly>'.'</td>';		
echo '</tr>';
$admin = 999888;

if(isset($_POST['ok']))
{  
 $us = mysql_real_escape_string($_POST['us']);
 $admin = mysql_real_escape_string($_POST['admin']);
 $i = mysql_real_escape_string($_POST['i']);
 $t = mysql_real_escape_string($_POST['t']);
 $amu = mysql_real_escape_string($_POST['amu']);
 $sender_id = mysql_real_escape_string($_POST['sender_id']);
 if(mysql_query("INSERT INTO earn(userid,amount) VALUES('$sender_id','$amu')")&&mysql_query("INSERT INTO lost(userid,amount) VALUES('$us','$i')"))
 {
  ?>
        <script>alert('successfully registered <td><input type="submit" value="Search" name="search"></td>');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>
<div id="login-form">
<table align="center" width="30%" border="0">
<tr>
<td><a><span style='color:black'>&nbsp &nbsp&nbspYour Account Number:<?php echo $userRow['user_id'] ?></span></a></td>
</tr>
<tr>
<td><a><span style='color:black'>&nbsp &nbsp&nbsp&nbspWelcome <?php echo $userRow['username']; ?></span></a></td>
</tr>
<tr>
<td><a><span style='color:black'>&nbsp &nbsp&nbsp&nbspBalance: <?php echo  $value; ?> tk.</span></a></td>
</tr>
</table>
</div>
</center>
<center>
<div id="login-form">
<form action="tranfer_money.php" method="post">    
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="sender_id" placeholder="Sender Account Number " required /></td></tr>
2% charge will required form ur Select amount.
<tr><td>
<select>
					<option>Amount........................</option>
					<?php for($i=0;$i<=$value;$i++){
					echo "<option>$i</option>";
					$t=$i*(2/100);
					$amu=$i-$t;
					}?>
				</select></td></tr>
				<td><input type="submit" value="Submit" name="ok"></td>	

</table>
</form>
</div>
</center>
</body>
</html>