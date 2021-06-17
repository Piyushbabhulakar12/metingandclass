<!DOCTYPE html>
<html>
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
	<style type="text/css">
      body
      {
        font-family: 'Poppins', sans-serif;
      }
      .navbar-toggler,
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none;
    border: none;
    box-shadow: none;
}
.nav-link
{
  color: #001;
}
.nav-link:hover
{
  color: #3AB54A;
  border-bottom: 2px solid #3AB54A;
}
.text_p
{
  text-align: center;
  font-size: 40px;
}
.doto
{
   background : radial-gradient(#0001 3px, transparent 4px);
   background-size : 30px 30px;
   height: 150px;
   width: 650px;
}
.text_pa
{
	font-size: 12px;
  padding-top: 15px;
}
.imga
{
	height: 600px; width: 100%; object-fit: contain;
}

@media only screen and (max-width: 600px) {
 .imga
 {
   display: none;
 }
}

    </style>
</head>
<body>
<form method="post">

<div class="container mt-4">
	<div class="row">
		<div class="col-md-7">
			<img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/d8f8f8100064887.5f0094be61d3a.jpg" class="imga">
		</div>
		<div class="col-md-5">
			<div class="row">
				<div class="col-md-9 m-auto">
					<h6 class="text_p">Registration</h6>
					<h6 class="text_pa">First Name</h6>
					<input type="text" name="f_name" placeholder="Enter First Name" class="form-control">
					<h6 class="text_pa">Last Name</h6>
					<input type="text" name="l_name" placeholder="Enter Last Name" class="form-control">
					<h6 class="text_pa">Email Id</h6>
					<input type="text" name="email" placeholder="Enter Email Id" class="form-control">
					<h6 class="text_pa">Phone Number</h6>
					<input type="text" name="phone" placeholder="Enter Phone Number" class="form-control">
					<h6 class="text_pa">Password</h6>
					<input type="Password" name="pass" placeholder="Enter Password" class="form-control">
					<h6 class="text_pa">Confirm Password</h6>
					<input type="Password" name="cpass" placeholder="Enter Confirm Password" class="form-control">
					<input type="submit" name="submit" value="Create Account" class="btn w-100 mt-4" style="background: #3AB54A;">
					<h6 style="font-size: 12px; margin-top: 10px;">I HAVE AN ACCOUNT ? <a href="log.php" style="text-decoration: none;">SIGN IN</a></h6>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

include 'conn.php';

if (isset($_POST['submit'])) 
{
	
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	$pass = md5($pass);
	$cpass = md5($cpass);

	$sql = " insert into user_regi (f_name,l_name,email,phone,pass,cpass) values ('$f_name','$l_name','$email','$phone','$pass','$cpass') ";

	if (mysqli_query($conn,$sql)) 
	{
		header("log.php");
	}
	else
	{
		echo "Not Done";
	}



}

?>




</form>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>