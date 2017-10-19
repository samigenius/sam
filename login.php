<?php 
@require_once 'config/config.php';
?>

<html>
    <head>
        <?php @require_once 'config/commonJS.php'; ?>		
    </head>
	
    <body>
        
        <div id="wrap">
            
            <div id="header">
                <h1 id="logo-text"><a href=".">Attendance Monitoring System</a></h1>

                <div id="header-links"></div>
            </div>
            
            <div id="content-wrap">
                <div id="main">
                	<?php echo $_SESSION['Msg']; ?>
					
					
                    <form id="formSubmit" method="post" action="process/processLogin.php">
                    <input type="hidden" name="type" value="login" />
                    <table class="tbl" width="700px">
                    
						<tr>
                            <td>User Name</td>
                            <td><input type="text" id="UserName" placeholder="User Name" class="validate[required]" name="UserName" /></td>
						</tr>
					
						<tr>
                            <td>Password</td>
                            <td><input type="password" id="Password" placeholder="Password" class="validate[required]" name="Password" /></td>
						</tr>
						
						
						<tr>
                            <td><label for="Type">Type</level></td>
                            <td>
								<SELECT name="pass">
									<OPTION>--Select Type--</OPTION>
									<OPTION Value="Admin" >Admin</OPTION>
									<OPTION Value="HR">HR</OPTION>
									<OPTION Value="Employee">Employee</OPTION>
								</SELECT></td>
						</tr>
						
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Login" name="submit" /></td>
                        </tr>
						
                    </table>
                    </form>
					
                    <div class="clear"></div></div>

            <?php @require_once 'menu/footer.php'; ?>
            
        </div>
    </body>
</html>