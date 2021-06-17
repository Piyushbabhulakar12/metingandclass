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
		body
		{

		}
	</style>
</head>
<body>
<form method="post">
	

	<?php include 'navbar.php'; ?>



<div class="container mt-3">
	<h5>DASHBOARD</h5>
</div>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 mt-3">
			

			<div class="row">
				<div class="col-md-6 mt-1">
				<div class="card p-3">
					
					<h6>Catagori</h6>
				<?php 
                 
                 include '../conn.php';

                 $sql = " select * from c_cource ";

                 $run = mysqli_query($conn,$sql);

                 $tot_cat = mysqli_num_rows($run);

				?>
				<h5><?php echo $tot_cat; ?></h5>

				</div>
			</div>
			<div class="col-md-6 mt-1">
				
				<div class="card p-3">
					
					<h6>Video's</h6>
				<?php 
                 
                 include '../conn.php';

                 $sql = " select * from c_video ";

                 $run = mysqli_query($conn,$sql);

                 $tot_cat = mysqli_num_rows($run);

				?>
				<h5><?php echo $tot_cat; ?></h5>

				</div>

			</div>
			</div>

			<div class="row mt-3">
				<div class="col-md-12">
				<div class="card p-3">
					
					<h6>EVENT</h6>
				<?php 
                 
                 include '../conn.php';

                 $sql = " select * from shedule_event ";

                 $run = mysqli_query($conn,$sql);

                 $tot_cat = mysqli_num_rows($run);

				?>
				<h5><?php echo $tot_cat; ?></h5>

				</div>
			</div>
			</div>




			<div class="card p-3 mt-4">
				<h6>All Video's</h6>
				<div class="mt-2"></div>
				<?php
                
                include '../conn.php';

                $sql = " select * from c_video ";

                $run = mysqli_query($conn,$sql);
                
                while ($row = mysqli_fetch_array($run)) 
                {
               
				?>
               
                <div class="row">
                	<div class="col-md-9">
                		<h6 class="mt-2" style="font-size: 12px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $row['c_title']; ?></h6>
                	</div>
                	<div class="col-md-3" style="text-align: right;">
                		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color: #3AB54A;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
                	</div>
                </div>
        

			<?php } ?>
			</div>








		</div>
		<div class="col-md-6 mt-3">
			

			<div class="card p-3">
				<h6>All Cources</h6>
				<div class="mt-2"></div>
				<?php
                
                include '../conn.php';

                $sql = " select * from c_cource ";

                $run = mysqli_query($conn,$sql);
                
                while ($row = mysqli_fetch_array($run)) 
                {
               
				?>
               
                <div class="row">
                	<div class="col-md-9">
                		<h6 class="mt-2" style="font-size: 12px;"><?php echo $row['c_name']; ?></h6>
                	</div>
                	<div class="col-md-3" style="text-align: right;">
                		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color: #3AB54A;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
                	</div>
                </div>
        

			<?php } ?>
			</div>





<div class="card p-3 mt-4">
				<h6>All Meeting</h6>
				<div class="mt-2"></div>
				<?php
                
                include '../conn.php';

                $sql = " select * from shedule_event ";

                $run = mysqli_query($conn,$sql);
                
                while ($row = mysqli_fetch_array($run)) 
                {
               
				?>
               
                <div class="row">
                	<div class="col-md-9">
                		<h6 class="mt-2" style="font-size: 12px;"><?php echo $row['e_name']; ?></h6>
                	</div>
                	<div class="col-md-3" style="text-align: right;">
                		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color: #3AB54A;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>
                	</div>
                </div>
        

			<?php } ?>
			</div>





		</div>
	</div>
</div>




</form>
</body>
</html>