<!DOCTYPE html>
<html>
	<head>
		<title>MyApp</title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="startup.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-webapp-status-bar-style" content="grey" />
		<meta name="viewport" content="width=device-width, user-scalable=no" />
		<script type="text/javascript" src="jquery.1.4.1.min.js"></script>
		<script type="text/javascript">			
			function submitLogin() {
				$("#error").html("<img src=\"loading.gif\" style=\"width: 50px; height: 50px;\" >");
				$.ajax({
					type: "POST",
					url: "loginsubmit.php",
					data: $("#loginform").serialize(),
					success: function(response)
					{
						$("#error").html(response);
					}
				});
			}
		</script>
	</head>
	
	<style type="text/css">
		#button
		{
			border-radius: 5px;
			border: 1px solid black;
			width: 100px;
			text-align: center;
			cursor: pointer;
		}
		
		#button:hover
		{
			background: #ddddff;
		}
	</style>
	
	<body>
		<h1>Login</h1>
		<form id="loginform">
			User Name: <input type="text" name="username" />
			<br>
			Password: <input type="password" name="password" />
		</form>
		<div id="button" onclick="submitLogin();">
			Login
		</div>
		<div id="error">
		</div>
	</body>
</html>

