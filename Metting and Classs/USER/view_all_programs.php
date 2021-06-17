<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'navbar.php'; ?>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h2 style="color: #3AB54A;">COURSES</h2>
    </div>
     
  </div>
</div>





<div class="container mt-4">
	<div class="row">
		<div class="col-md-9 m-auto">
			 <?php
     
     include '../conn.php';

     $sql = " select * from c_cource where status = 'Active' ";

     $run = mysqli_query($conn,$sql);
      
    while ($row = mysqli_fetch_array($run)) 
    {
      
    ?>
			<div class="row mt-4">
				<div class="col-md-4 mt-2">
					<img src="../Image/<?php echo $row['c_img']; ?>" style="width: 100%; height: 200px; object-fit: cover;">
				</div>
				<div class="col-md-8 mt-2">
					<h5><?php echo $row['c_name']; ?></h5>
					<h6 style="font-size: 12px; color: gray;"><?php echo $row['c_des']; ?></h6>
					<a href="cource_catvideo.php?id=<?php echo $row['id']; ?>"><button class="btn btn-dark rounded-0 float-end" style="margin-top: 70px;">LEARN MORE</button></a>
				</div>
			</div>
<?php } ?>
		</div>
	</div>
</div>







<?php include 'footer.php'; ?>

</body>
</html>