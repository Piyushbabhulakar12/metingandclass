<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
</head>
<body>

<form method="post">
	


	<?php include 'navbar.php'; ?>


<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: #3AB54A;">FEEDBACK</h2>
    </div>
  </div>
</div>

         


<div class="container">
	<div class="row">
		<div class="col-md-8 m-auto">
			<?php
          
           include '../conn.php';

           $sql = " select * from feedback ORDER BY id DESC ";

           $run = mysqli_query($conn,$sql);

           while ($row = mysqli_fetch_array($run)) 
           {

           ?>
			<div class="card p-3 mt-2">
				<div class="row">
					<div class="col-md-1 col-2">
						<div style="width: 40px; background: #f5f1f1; padding: 8px; border-radius: 50px; text-align: center;">
							<?php  $nas = $row['user_name'];

						 echo $nas[0]; 

						?>
						</div>
					</div>
					<div class="col-md-10 col-10">
						<h6><?php echo $row['user_name'] ?></h6>
						<div style="font-size: 12px; color: gray;"><?php echo $row['mess'] ?></div>
					</div>
				</div>
			</div>

		<?php } ?>

		</div>
	</div>
</div>







</form>

</body>
</html>