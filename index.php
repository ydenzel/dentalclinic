<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="images\icons\periodontal-scaler.png">
	<title>Dental Clinic - Log in or Sign Up</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<?php 
		require 'footer.php';
		
	?>
	
</head>

<style>
	.panel{
		margin-top: 100px;
	}
</style>

<body>

<div class="container">
	
	
	<div class="row">
		<div class="col-md-3 col-md-offset-9 col-xs-9 col-xs-offset-1">
			<div class="panel panel-default">
					<form style="opacity: 1.0;" class="panel-body" action="home.php" method="post">
						<div class="row">
							<div class="">
								<h1 class="text-center " style=" text-shadow: 2px 2px grey;"> Dental Clinic </h1>
							</div>
						</div>
						<div class="row">
							
							<div class="col-md-10 col-md-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									<input placeholder="username" type="text" name="username" class="glyphicon glyphicon-user form-control"></input>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-10 col-md-offset-1">
								<div class="input-group" >
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
									<input placeholder="password" type="password" class="form-control" name="password"></input>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1 col-md-offset-1">
									<button formaction="home.php" type="submit" class="btn btn-success">Login</button>
							</div>
							
							
							
						</div>
						
					</form>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-11 col-md-offset-1">
									<p style="display:inline;">Don't have an account?</p>
									<a href="Registration.php">Sign up.</a>
							</div>
						</div>
					</div>
			</div>
	</div>
	
</div>
	
</body>


</html>