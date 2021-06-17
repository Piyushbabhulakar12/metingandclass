<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'navbar.php'; ?>

<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from c_cource where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h2 style="color: #3AB54A;"><?php echo $row['c_name']; ?></h2>
    </div>
     
  </div>




<div class="container mt-4">
	<div class="row">
		<?php

$c_name = $row['c_name'];

include '../conn.php';

$sql = " select * from c_video where catagori_c = '$c_name' ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run))
{

?>
		<div class="col-md-4 mt-4">
			<div class="card shadow" style="border:none;">
				<a href="view_video.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: #001;"><img src="https://img.youtube.com/vi/<?php echo $row['yv_id']; ?>/maxresdefault.jpg" style="width: 100%; height: 190px;"></a>
				<div class="card-body">
				    <a href="view_video.php?id=<?php echo $row['id']; ?>" style="text-decoration: none; color: #001;"><h6 style="line-height: 1.5em; height: 3em; overflow: hidden;"><?php echo $row['c_title']; ?></h6></a>
				    <h6 style="font-size: 12px; color: gray;"><?php echo $row['catagori_c']; ?></h6>
			    </div>
			</div>
		</div>
	<?php } ?>
	</div>
</div>







</div>








<?php include 'footer.php'; ?>

</body>
</html>