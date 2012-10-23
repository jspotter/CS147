<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	if ($username == "test" and $password == "test")
	{
?>
		<script type="text/javascript">
			window.location = "loggedin.php";
		</script>
<?
	}
	else
	{
?>
	<style type="text/css">
		#message
		{
			color: red;
		}
	</style>
	<div id="message">
		Sorry, your username or password was incorrect.
	</div>
<?
	}
?>	

