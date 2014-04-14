<?php include 'connection.php'; ?>
<!DOCTYPE html/>
<html>
<head>
	<link href="style.css" rel="stylesheet"/>
</head>
<body>
	<div id="login_box">
		<!-- PHP if/else statements added to see if user is logged in and session has been started -->
		<?php 
			if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
			{ include 'functions.php';
		?>
			<div id="welcome">Welcome <?php echo $_SESSION['username'];?>, congratulations you are logged in!!</div>
			<center><div id="link"><a href="logout.php">logout</a></div></center>
		<?php
		}
		else
		{
		?>
		<form action="login.php" method="POST">
			<div id="username_line">Username: <input type="text" name="username" id="username"/></div>
			<br/>
			<div id="password_line">Password: <input type="password" name="password" id="password"/></div>
			<br/>
			<div id="reg_link"><a href="register_html.php">register</a></div><input type="submit" value="login" id="submit_button"/>
		</form>
		<?php
		}
		?>
	</div>
</body>
</html>