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
</head>
<body>
<form method="post">
	

	<?php include 'navbar.php'; ?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: #3AB54A;">ALL CATEGORY</h2>
    </div>
  </div>
</div>



<div class="container mt-3">
   <div class="row">
      <?php

include '../conn.php';

$sql = " select * from c_cource ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run)) 
{

?>
      <div class="col-md-3 mt-4">
         <div class="card" style="border: none;">

                    <img src="../Image/<?php echo $row['c_img']; ?>" style="height: 220px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                       <h6 style=" white-space: nowrap; overflow: hidden; "><?php echo $row['c_name']; ?></h6>
                       <h6 style=" white-space: nowrap; overflow: hidden; font-size: 12px;"><?php echo $row['c_des']; ?></h6>
                       
                          <?php
                             
                             if ($row['status'] == 'Active') 
                             {
                                ?>
                                   <h6 style="color: #3AB54A;"><?php echo $row['status']; ?></h6>
                                <?php
                             }
                             else
                             {
                              ?>
                                    <h6 style="color: #dc3545;"><?php echo $row['status']; ?></h6>
                              <?php
                             }

                          ?>


<div class="row mt-1">
   <div class="col-md-11">
       <a href="edit_catagori.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn w-100" style="background:#3AB54A;">Edit</button></a>
   </div>
</div>

<div class="row mt-2">
   <div class="col-md-11">
       <a href="delete_catagori.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger w-100">Delete</button></a>
   </div>
</div>
                       
            
                    </div>
         </div>
      </div>



<?php } ?>
   </div>
</div>



<br>
   
  





</form>
</body>
</html>