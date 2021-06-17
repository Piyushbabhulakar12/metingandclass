<?php

session_start();

if ($_SESSION['email'] == true) 
{
   $_SESSION['email'];
}
else
{
  header("location:logout.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.text_pa
{
	font-size: 12px;
  padding-top: 15px;
}
	</style>
</head>
<body>
<form method="post">
<?php include 'navbar.php'; ?>





<div class="container mt-4">
	<div class="row">
		<div class="col-md-12">
			<h2 style="color: #3AB54A;">CONTACT US</h2>
		</div>
	</div>




<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 mt-3">

			<h6 class="text_pa">NAME</h6>
			<input type="text" name="user_name" placeholder="ENTER NAME" class="form-control">
			<h6 class="text_pa">EMAIL ID</h6>
			<input type="text" name="email" placeholder="ENTER EMAIL ID" class="form-control">
			<h6 class="text_pa">MESSAGE</h6>
			<textarea name="mesas" placeholder="ENTER EMAIL ID" class="form-control" rows="5"></textarea>
			
			<input type="submit" name="submit" value="SEND" class="btn mt-3" style="background: #3AB54A; ">



		</div>
		<div class="col-md-6 border-start mt-3">

			<div class="card p-4">
				<h4>CONTACT NO</h4>
				<h6 style="color: #3AB54A;"><a href="tel:+91 5242 849245" style="color: #3AB54A; text-decoration: none;">+91 5242 849245</a></h6>
			</div>
			<div class="card p-4 mt-2">
				<h4>EMAIL ID</h4>
				<h6 style="color: #3AB54A;">logo@gmail.com</h6>
			</div>
			<div class="card p-4 mt-2">
				<h4>ADDRESS</h4>
				<h6 style="color: #3AB54A;">XYZ,COMPANY,NEW MARKET - 458424</h6>
			</div>
			
		</div>
	</div>
</div>




</div>

<?php

include '../conn.php';

if (isset($_POST['submit'])) 
{
	$user_name = $_POST['user_name'];
	$email = $_POST['email'];
	$mess = $_POST['mesas'];

    $sql = " insert into feedback (user_name,email,mess) values ('$user_name','$email','$mess') ";

    if (mysqli_query($conn,$sql)) 
    {
    	include '../Admin/notisuc.php';
    }
    else
    {
    	echo "Not Done";
    }

}

?>







<?php include 'footer.php'; ?>
</form>
</body>
</html>