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
	
	#main {   
	
		background-color: white;
	}
	
	
	
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
            <?php @require_once 'menu/hr_menu.php'; ?>
			
			
 
			
<div id="content-wrap">
<div id="main">
<?php echo $_SESSION['Msg']; ?>

<h1 align="center"> Employee Attendance</h1>					

<div id="left">

<form method="post" action="hr_employee_attendance.php">
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
<form method="post" action="hr_employee_attendance.php">						

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
echo '<td>'.'<input type="text" name="con_date" id="con_date" value='.$record_date.'>'.'</td>';			
echo '</tr>';

echo '</table>';

echo '<br>'.'<br>';

echo '<button class="btn-info-1"  name="submit1"/>Check In</button>';

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

$status="Not Fixed Yet";



if(isset($_POST['submit1']))

{



// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO empcheckin (EmpID, EmpName, Date, EntryTime, EntryStatus) VALUES('$eid', '$ename', '$con_date', '$DateTime','$status')");



if($sql){
	echo "<script type='text/javascript'>";
	echo "alert(' $ename check-in approved at $record_time ')"; 
	echo "</script>";
}


}

else if(isset($_POST['submit2'])){


// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO empcheckout (EmpID, EmpName, Date, ExitTime, ExitStatus) VALUES('$eid', '$ename', '$con_date', '$DateTime', '$status')");



if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('$ename check-out approved at $record_time')"; 
	echo "</script>";
}
}
?>