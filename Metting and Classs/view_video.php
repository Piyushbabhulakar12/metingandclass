<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'navbar.php'; ?>



<?php

$id = $_GET['id'];

include 'conn.php';

$sql = " select * from c_video where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>




<div class="container mt-5">
	<div class="row">
		<div class="col-md-7">
			<iframe src="<?php echo $row['video_m']; ?>" frameborder="0" clipboard-write; encrypted-media; gyroscope; allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 400px; width: 100%;"></iframe>
		</div>
		<div class="col-md-5">
			 <h3 style="line-height: 1.5em; height: 3em; overflow: hidden; color: #3AB54A;"><?php echo $row['c_title']; ?></h3>
			 <h6 style="font-size: 12px; color: gray;"><?php echo $row['catagori_c']; ?></h6>

		</div>
	</div>
</div>






<?php include 'footer.php'; ?>

</body>
</html>