<?php 
@require_once 'config/config.php';
@require_once 'config/session.php';
@require_once 'class/dbclass.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'config/commonJS.php'; ?>
    </head>
    <body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once 'menu/header.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/emp_menu.php'; ?>
			
			<div id="content-wrap">
                <div id="main">
					<br>
					<h1>Welcome!!!</h1>
					<?php echo $_SESSION['Msg']; ?>
				</div>
			</div>
			
            <!--footer starts here-->
            <?php @require_once 'menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
    </body>
</html>
