<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>

<html>

    <head>
		<?php require_once 'config/commonJS.php'; ?>
		<title>View Employee Records</title>
		
		<style>
			table, th, td {
			border: 1px solid black;
			padding: 5px;
			}
			table {
			border-spacing: 3px;
			}
			table#t01 {
			width: 100%;    
			background-color: #f1f1c1;
			}
		</style>
		
		<script language="javascript" type="text/javascript">
			<!--
			function imageedit(url) {
			newwindow=window.open(url,'name','left=300,top=10,titlebar=0,toolbar=0,location=0,directories=0,status=0,menubar=0, resizable=0,width=800,height=650');
			if (window.focus) {newwindow.focus()}
			return false;
			}
			// -->
		</script>

		
	</head>
	
	<body>

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
					<h1 align="center">View Employee List</h1>
					<br>
					
					<form action="ad_view_employee_list.php" method="post">
					Employee ID: <input type="text" name="term" />
					 
					<input type="submit" name="submit" value="Search" />
					</form>
					<br></br>
					
					
			<table style="width:100%">
 
			<table id="t01">
					  <tr>
						<th align="center" style="width:60px">Emp. ID</th>
						<th align="center" style="width:100px">Employee Name</th>		
						<th align="center" style="width:230px">Address</th>
						<th align="center" style="width:80px">Birth Date</th>
						<th align="center" style="width:40px">Gender</th>
						<th align="center" style="width:80px">Nationality</th>
						<th align="center" style="width:60px">Blood Group</th>
						<th align="center" style="width:100px">Contact No</th>
						<th align="center" style="width:130px">Email</th>
					  </tr>
					  
			
			<?php			
				include('../class/db_p.php');


				// Connect to server and select database.
				$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
				mysqli_select_db($con, $db_name)or die("cannot select DB");  
				
				$term = $_POST['term'];
				
				if($term!=="")
				
				{		
				$sql = mysqli_query($con, "SELECT * FROM employee WHERE EmpID Like '%$term%'") 
						or die(mysql_error());

				while($row = mysqli_fetch_array( $sql )) {
							
						// echo out the contents of each row into a table
						echo "<tr>";
						echo '<td align="center">' . $row['EmpID'] . '</td>';
						echo '<td align="center">' . $row['EmployeeName'] . '</td>';
						echo '<td align="center">' . $row['Address'] . '</td>';
						echo '<td align="center">' . $row['BirthDate'] . '</td>';
						echo '<td align="center">' . $row['Gender'] . '</td>';
						echo '<td align="center">' . $row['Nationality'] . '</td>';
						echo '<td align="center">' . $row['BloodGroup'] . '</td>';
						echo '<td align="center">' . $row['ContactNo'] . '</td>';
						echo '<td align="center">' . $row['Email'] . '</td>';
						echo "</tr>"; 
					}

				}
				else{
				
				$sql = mysqli_query($con, "SELECT * FROM employee") 
						or die(mysql_error());

				while($row = mysqli_fetch_array( $sql )) {
							
						// echo out the contents of each row into a table
						echo "<tr>";
						echo '<td align="center">' . $row['EmpID'] . '</td>';
						echo '<td align="center">' . $row['EmployeeName'] . '</td>';
						echo '<td align="center">' . $row['Address'] . '</td>';
						echo '<td align="center">' . $row['BirthDate'] . '</td>';
						echo '<td align="center">' . $row['Gender'] . '</td>';
						echo '<td align="center">' . $row['Nationality'] . '</td>';
						echo '<td align="center">' . $row['BloodGroup'] . '</td>';
						echo '<td align="center">' . $row['ContactNo'] . '</td>';
						echo '<td align="center">' . $row['Email'] . '</td>';
						echo "</tr>"; 
						}
						
				}
				
			?>	

		    </table>
			</div>
			
		</div>
            <!--footer starts here-->
            <?php @require_once '../menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
		
		</body>
		
</html>