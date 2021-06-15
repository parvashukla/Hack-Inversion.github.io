



<!DOCTYPE html>
<html>
<head>
	<title>Hack Inversion</title>
	<style>
		.login-div{
			width: 430px;
			height: 600px;
			padding: 60px 35px 35px 35px;
			border-radius: 40px;
			background: #ecf0f3;
			box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #ffffff;
		}
		.logo{
			background: url("logo.png");
			width: 100px;
			height: 100px;
			border-radius: 50%;
			margin: 0 auto;
			box-shadow: 0px 0px 2px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaaf, -8px -8px 15px #ffffff;
		}
		.title{
			text-align: center;
			font-size: 28px;
			padding-top: 24px;
			letter-spacing: 0.5;

		}
		.sub-title{
			text-align: center;
			font-size: 15px;
			padding-top: 7px;
			letter-spacing: 3px;
		}
		.fields{
			width: 100%;
			padding: 17px 5px 5px 5px;
		}
		.fields input{
			border: none;
			outline: none;
			background: none;
			font-size: 18px;
			color: #555;
			padding: 20px 10px 20px 5px;
		}
		.username, .password{
			margin-bottom: 30px;
			border-radius: 25px;
			box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #ffffff;
		}
		.fields svg{
			height: 22px;
			margin: 0px 10px -3px 25px;
		}
		.signin-button{
			outline: none;
			border: none;
			cursor: pointer;
			width: 100%;
			height: 60px;
			border-radius: 30px;
			font-size: 20px;
			font-weight: 700;
			font-family: "Lato", sans-serif;
			color: #fff;
			background: #24cfaa;
			box-shadow: 3px 3px 8px #b1b1b1, -3px -3px 8px #ffffff;
			transition: 0.5s;

		}

		.signin-button:hover{
			background: #2fdbb6;
		}
		.signin-button:active{
			padding-top: 20px;
			text-align: center;
		}
		.link a{
			text-decoration: none;
			color: #aaa;
			font-size: 15px;
		}
	</style>
</head>
<body>
   	<?php 
   	$unm="";
   	$snm="";
   	$ph="";
if(isset($_POST["btnsub"]))
{
   	$cnn = mysqli_connect("localhost","root","","website");
   	$unm=$_POST["unm"];
   	$snm=$_POST["snm"];
   	$ph=$_POST["ph"];
$qry = "insert into user(Name,Surname,Phone) values('$unm','$snm','$ph')";


$result = $cnn->query($qry); 
$yourURL="https://localhost/website/home.php";
echo("<script>location.href='$yourURL'</script>");  	
}
   	?>
 <center>
	<div class="login-div">
		<div class="logo"></div>
		<div class="title">Hack Inversion</div>
		<div class="sub-title">Parva</div>
		<form method="POST">
		<div class="fields">
			<div class="username"><input type="text" name="unm" class="user-input" placeholder="First name" pattern="[A-Za-z].{4,}" title="name should be greater than 4 characters"required/></div>
			<div class="username"><input type="text" name="snm" class="user-input" placeholder="Surname" pattern="[A-Za-z].{2,}" title="name should be characters only and greater than 2 characters"required/></div>
			<div class="username"><input type="text" name="ph" class="user-input" placeholder="Phone number" pattern="[0-9].{,10}" title="number should be 10 digits"required/></div>
		</div>
		<button class="signin-button" name="btnsub">Register</button>
		<div class="link">
			<!-- <a href="#">Forgot Password?</a> or <a href="#">Sign up</a> -->
		</div>
		</form>
	</div>
</center>
</body>
</html> 