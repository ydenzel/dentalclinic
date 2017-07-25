<html>

<head>
	<link rel="icon" href="img\icons\periodontal-scaler.png">
	<title>Dentist-Registration</title>
	<style>
		div.main-body{
			padding:1%;
		}
		div.main-body > div{
			background-color:white;
			padding:1%;
			border-radius:5px;
		}
		#reg-body{
			height:100%;
		}
		.sub{
			height:10%;
		}
		#reg-content{
			height:70%;
		}
		#reg-row{
			margin: 10% 10% 10% 10%;
		}
	</style>
</head>

<body id="reg-body">

<!---->
<div class="sub"><?php include "header.php";?></div>

<!---->
<div class="container-fluid" id="reg-content">
	<div class="main-body col-xs-12 col-md-4 col-md-offset-4">
		<div class="row" id="reg-row">
			<div class="text-center"><h1><em>Registration Form<em></h1></div>
			<form action="register.php" method="post">
				Name<br>
				<input class="col-xs-12 form-control" type="text" placeholder="Name" name="firstname">
				<input class="col-xs-12 form-control" type="text" placeholder="Last Name" name="lastname">
				Choose a username<br>
				<input class="col-xs-12 form-control" type="text" placeholder="Username" name="username">
				Enter a password<br>
				<input class="col-xs-12 form-control" type="password">
				Confirm password<br>
				<input class="col-xs-12 form-control" type="password" name="password">
				<br>Gender<br>
				<label class="checkbox-inline"><input type="checkbox" placeholder="">Male</label>
				<label class="checkbox-inline"><input type="checkbox" placeholder="">Female</label>
				<br><br>Enter Email Address<br>
				<input class="col-xs-12 form-control" type="text" placeholder="Email Address">
				Birthday<br>
				<input class="col-xs-12 form-control" type="text" placeholder="Dropdowns ni diri ples">
				Enter Home Address<br>
				<input class="col-xs-12 form-control" type="text" placeholder="Address">
				Mobile Phone Number
				<input class="col-xs-12 form-control" type="text" placeholder="Cell number">

				<div class="col-md-1 col-md-offset-1">
									<button  type="submit" class="btn btn-success">Confirm</button>
							</div>
			</form>
		</div>
	</div>
</div>

<!---->
<!-- <div class="sub"><?php include "footer.php";?></div> -->

</body>

</html>
