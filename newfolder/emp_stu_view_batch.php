<?php
include("../class/db_p.php");
// Connect to server and select database.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con, $db_name)or die("cannot select DB");


if(isset($_POST['addbatch'])){
$batchno=$_POST['batchno'];
$batchcatagory=$_POST['batchcatagory'];
$batchtime=$_POST['batchtime'];

// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO batch(BatchNo, BatchCatagory, Batchtime) VALUES('$batchno', '$batchcatagory', '$batchtime')");

//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('Data has saved')"; 
	echo "</script>";
}
}
?>



<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'config/commonJS.php'; ?>
    
	<link rel="stylesheet" href="../css/emp.abc.css" type="text/css" />
	
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
	
	</head>
    <body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once '../menu/header.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/emp_menu.php'; ?>
			
			<div id="content-wrap">
                <div id="main">
					<?php echo $_SESSION['Msg']; ?>
					
					
					<div class="div_left">
					
					<!-- Search element-->
						<div class="top_query" style="width:100%; height:30px; padding-top:20px">
						
							<form action="emp_stu_view_batch.php" method="post" style="float:left; padding-left:20px">
							
								<b>Batch No :</b>
									<select name="batchno" id="batchno">
										<option value="0">--Select Batch--</option>
										<?php
										$sql=mysqli_query($con, "SELECT DISTINCT BatchNo FROM batch");
										while($row = mysqli_fetch_array( $sql )) {
											$batch=$row['BatchNo'];
								echo"<option value='$batch'>$batch</option>";
										}
										?>
			
									</select>
							
								<b> Batch Catagory :</b>
									<select name="batchcatagory" id="batchcatagory">
										<option value="0">--Select Batch Catagory--</option>
										<?php
										$sql=mysqli_query($con, "SELECT DISTINCT BatchCatagory FROM batch");
										while($row = mysqli_fetch_array( $sql )) {
											$BatchCatagory=$row['BatchCatagory'];
								echo"<option value='$BatchCatagory'>$BatchCatagory</option>";
										}
										?>
									</select>
									<input type="submit" name="submit2" value="Submit">
							</form>
							
						</div>
						
						
						
						<div class="down_table">
					'
							
							<br>
								<h1 align="center">Batch Information</h1>
							<br>
							
							<table style="width:100%">
	 
								<table id="t01">
								
								  <tr>
									<th align="center">Batch No</th>
									<th align="center">Batch Catagory</th>		
									<th align="center">Time</th>		
								  </tr>
								  <?php
								  if(isset($_POST['submit2'])){
									  
									  $batchno=$_POST['batchno'];
									  $batchcatagory=$_POST['batchcatagory'];
									  
									  if($batchno!="0" && $batchcatagory=="0"){
										$sql=mysqli_query($con, "SELECT * FROM batch WHERE BatchNo=$batchno");
										while($row = mysqli_fetch_array( $sql )) {
											$BatchNo=$row['BatchNo'];
											$BatchCatagory=$row['BatchCatagory'];
											$Batchtime=$row['Batchtime'];
								echo"<tr><td>$BatchNo</td><td>$BatchCatagory</td><td>$Batchtime</td></tr>";
										}
									}

								else if($batchcatagory!="0" && $batchno=="0"){
										$sql=mysqli_query($con, "SELECT * FROM batch WHERE BatchCatagory='$batchcatagory'");
										while($row = mysqli_fetch_array( $sql )){
											$BatchNo=$row['BatchNo'];
											$BatchCatagory=$row['BatchCatagory'];
											$Batchtime=$row['Batchtime'];
								echo"<tr><td>$BatchNo</td><td>$BatchCatagory</td><td>$Batchtime</td></tr>";
										}
									}
									
							else if($batchcatagory!="0" && $batchno!="0"){
										$sql=mysqli_query($con, "SELECT * FROM batch WHERE BatchCatagory='$batchcatagory' AND BatchNo=$batchno");
										while($row = mysqli_fetch_array( $sql )) {
											$BatchNo=$row['BatchNo'];
											$BatchCatagory=$row['BatchCatagory'];
											$Batchtime=$row['Batchtime'];
								echo"<tr><td>$BatchNo</td><td>$BatchCatagory</td><td>$Batchtime</td></tr>";
										}
									}
										
								  }
										?>
								  
								  
								  
								  
								  
								 </table>
								 
							 </table>
						
						</div>
		
					
					</div>
					
					
					
					<div class="div_right" align="center">
					
						<form action="" method="post">
							<br>
							<h1>Add New Batch</h1>
						
								<br><br>
						<table>
						<tr>
							<td>Batch No</td> <td>
								<input type="text" name="batchno"></td>
						</tr>
							<tr><td>Batch Catagory</td> <td>
								<input type="text" name="batchcatagory"></td>
						</tr>
						<tr>
						<td>Batch time</td> <td><input type="text" name="batchtime"></td>
						</tr>
						<tr><td colspan="2" align="center">
							<input type="submit" name="addbatch" value="Submit">
						</td></tr>
						</table>
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


