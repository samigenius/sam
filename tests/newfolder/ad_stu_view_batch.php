<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>

<html>

<head>
	<?php require_once 'config/commonJS.php'; ?>
    
	<link rel="stylesheet" href="../css/ad.abc.css" type="text/css" />
	
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
    <?php @require_once 'menu/admin_menu.php'; ?>
			
	<div id="content-wrap">
		<div id="main">
			<?php echo $_SESSION['Msg']; ?>
					
					
				<div class="div_left">
					
					<!-- Search element-->
					<div class="top_query" style="width:100%; height:50px;background-color:#306BC1; border-bottom:1px solid gray ; padding-top:20px">
						
						<form action="ad_stu_view_batch.php" style="float:left ;padding-left:20px">
							
							<b>Batch No :</b>
								<select name="batchno" id="batchno">
									<option>--Select Batch--</option>
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
								</select>
								<input type="submit" name="submit1" value="Submit">
						</form>
							
						<form action="ad_stu_view_batch.php" style="float:right; padding-right:20px">
							
							<b> Batch Catagory :</b>
								<select name="batchcatagory" id="batchcatagory">
									<option>--Select Batch Catagory--</option>
									<option value="webdesigndeveloper">Web Design & Developer</option>
									<option value="softwaredeveloper">Software Developer</option>
									<option value="graphicsdesign">Graphics Design</option>
								</select>
								<input type="submit" name="submit2" value="Submit">
						</form>
							
					</div>	
						
						
					<div class="down_table">
						
					<form action="ad_stu_view_batch.php">
							
						<br>
							<h1 align="center">Batch Information</h1>
						<br>
							
						<table style="width:100%">
	 
							<table id="t01">
								
								<tr>
									<th align="center">Batch No</th>
									<th align="center">Batch Catagory</th>		
								</tr>
								  
							</table>
								 
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
