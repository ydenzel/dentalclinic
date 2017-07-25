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
			<form>
				<input class="col-xs-12 form-control" type="text" value="Name">
				<input class="col-xs-12 form-control" type="text" value="Last Name">
				<label class="checkbox-inline"><input type="checkbox" value="">Male</label>
				<label class="checkbox-inline"><input type="checkbox" value="">Female</label>
				<input class="col-xs-12 form-control" type="text" value="Email Address">
				<input class="col-xs-12 form-control" type="text" value="Age">
				<input class="col-xs-12 form-control" type="text" value="Address">
				<input class="col-xs-12 form-control" type="text" value="Cell number">
				<hr>
				<input class="col-xs-12 form-control" type="text" value="Guardian's number">
			</form>
		</div>
	</div>
</div>

<!---->
<div class="sub"><?php include "footer.php";?></div>

</body>

</html>