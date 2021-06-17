<?php

session_start();

if ($_SESSION['email'] == true) 
{
	 $_SESSION['email'];
}
else
{
	header("location:Sign/log.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.dasd
		{
			color: #001;
			padding-left: 0px;
		}
		.dasd:hover
		{
			color: #001;
		}
	</style>
</head>
<body>
<form method="post">
	
	<?php include 'navbar.php'; ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: #3AB54A;">ALL EVENT</h2>
    </div>
  </div>




<div class="container">


<div class="row">
	<div class="col-md-8">
	

	<?php

include '../conn.php';

$sql = " select * from shedule_event ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{
	
?>
	<div class="row mt-5">
		<div class="col-xl-2 col-6">
			<?php $tat = $row['e_date']; ?>

			<h2 style="color: #3AB54A; font-size: 60px; text-align: center;"><?php echo $tat[8],$tat[9]; ?></h2>

			<h6 style="text-align: center;"><?php echo $monthNuma = $tat[5],$tat[6],$tat[4],$tat[0],$tat[1],$tat[2],$tat[3]; ?></h6>

			<h6 style="text-align: center; margin-top: 10px;"><?php echo $a = $row['e_from'] ?> - <?php echo $b = $row['e_to'] ?></h6>
			<h6></h6>


		</div>
		<div class="col-xl-2 col-6">
			<img src="https://i.pinimg.com/236x/bf/57/02/bf57026ee75af2f414000cec322f7404.jpg" style=" height: 120px; width: 100%; object-fit:contain;">
		</div>
		<div class="col-xl-5">
			<h5><a href="all_shedule.php?id=<?php echo $row['id']; ?>" class="dasd"><?php echo $row['e_name']; ?></a></h5>
			<h6 style="font-size: 12px; color: gray;"><?php echo $row['e_by']; ?></h6>
			<h6 style="font-size: 11px; color: gray;"><?php echo $row['e_link']; ?></h6>
			<h6 style="font-size: 11px; color: gray;"><?php echo $row['e_des']; ?></h6>
		</div>
		<div class="col-xl-3">
			<button class="btn btn-dark btn-sm"><i class="fa fa-users" aria-hidden="true"></i> &nbsp <?php echo $row['e_limit']; ?></button>
		</div>
	</div>
<?php } ?>
</div>
	<div class="col-md-4">
		
		<?php
          
          if (isset($_GET['id'])) 
          {
          	include 'edit_shedule.php';
          }

		?>


	</div>
</div>





</div>


	






</form>
</body>
</html>