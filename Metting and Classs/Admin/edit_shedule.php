

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
	

	


<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from shedule_event where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div>
  <h5>SHEDULE EVENT</h5>
</div>

<h6 class="text_pa">Courses Video</h6>
<input type="text" name="e_name" value="<?php echo $row['e_name']; ?>" class="form-control">

<h6 class="text_pa">Event Shedule By</h6>
<input type="text" name="e_by" value="<?php echo $row['e_by']; ?>" class="form-control">

<h6 class="text_pa">Meeting Link</h6>
<input type="text" name="e_link" value="<?php echo $row['e_link']; ?>" class="form-control">

<h6 class="text_pa">Event Date</h6>
<input type="date" name="e_date" value="<?php echo $row['e_date']; ?>" class="form-control">

<h6 class="text_pa">Event From</h6>
<input type="time" name="e_from" value="<?php echo $row['e_from']; ?>" class="form-control">

<h6 class="text_pa">Event To</h6>
<input type="time" name="e_to" value="<?php echo $row['e_to']; ?>" class="form-control">

<h6 class="text_pa">Event Location</h6>
<textarea name="e_location" class="form-control"><?php echo $row['e_location']; ?></textarea>

<h6 class="text_pa">Event Member Limit</h6>
<input type="number" name="e_limit" value="<?php echo $row['e_limit']; ?>" class="form-control">

<h6 class="text_pa">Event Description</h6>
<textarea name="e_des" rows="6" cols="25" class="form-control"><?php echo $row['e_des']; ?></textarea>



<div class="container mt-3">
	<div class="row">

		<div class="container">
			<input type="submit" name="submit" value="Update Event" class="btn w-100" style="background: #3AB54A;">
		</div>
		    <a href="del_shedule.php?id=<?php echo $row['id']; ?>"><input type="button" name="" value="Delete" class="btn btn-danger w-100"></a>
			<a href="all_shedule.php"><input type="button" name="" value="Cancel" class="btn btn-primary w-100" style="margin-top: -7px;"></a>
		
	</div>
</div>






	<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['submit'])) 
{
	$e_name = $_POST['e_name'];
	$e_by = $_POST['e_by'];
	$e_link = $_POST['e_link'];
	$e_date = $_POST['e_date'];
	$e_from = $_POST['e_from'];
	$e_to = $_POST['e_to'];
	$e_location = $_POST['e_location'];
	$e_limit = $_POST['e_limit'];
	$e_des = $_POST['e_des'];

	$sql = " update shedule_event set e_name = '$e_name' , e_by = '$e_by' , e_link = '$e_link' , e_date = '$e_date' , e_from = '$e_from' , e_to = '$e_to' , e_location = '$e_location' , e_limit = '$e_limit' , e_des = '$e_des' where id = '$id' ";

	if (mysqli_query($conn,$sql)) 
	{
		 echo '<meta http-equiv="refresh" content="0">';
	}
	else
	{
		echo "Not Done";
	}


}

?>




</form>
</body>
</html>