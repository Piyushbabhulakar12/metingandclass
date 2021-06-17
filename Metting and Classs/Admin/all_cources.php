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
    .text_pa
{
  font-size: 12px;
  padding-top: 15px;
}

.inputfile {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.inputfile + label {
    font-size: 1em;
    font-weight: 700;
    color: white;
    background-color: black;
    display: inline-block;
    cursor: pointer;
    padding: 7px;
    width: 120px;
    text-align: center;
    border-radius: 4px;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #3AB54A;
}

.sdsd
{
color: #001;
padding-left: 0px;
}
.sdsd:hover
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
      <h2 style="color: #3AB54A;">ALL COURSES</h2>
    </div>
  </div>



 <div class="row">
   <div class="col-md-7">
    <?php

include '../conn.php';

$sql = " select * from c_video ";

$run = mysqli_query($conn,$sql);

while ($row = mysqli_fetch_array($run))
{

?>
     <div class="card mt-3">
       <div class="row">
         <div class="col-md-3">
           <img src="https://img.youtube.com/vi/<?php echo $row['yv_id']; ?>/maxresdefault.jpg" style="width: 100%; height: 95px; object-fit: cover;">
         </div>
         <div class="col-md-7" style="padding: 8px;">
           <div style="font-size: 14px; line-height: 1.5em; height: 3em; overflow: hidden;"><a href="all_cources.php?id=<?php echo $row['id']; ?>" class="sdsd"><?php echo $row['c_title']; ?></a></div>
           <div style="font-size: 12px; color: gray;"><?php echo $row['catagori_c']; ?></div>
           <?php
             
             if ($row['status'] == 'Active') 
             {
               ?>
                <div style="font-size: 12px; color: #198754;"><?php echo $row['status']; ?></div>
               <?php
             }
             else
             {
              ?>
                <div style="font-size: 12px; color: #dc3545;"><?php echo $row['status']; ?></div>
              <?php
             }

           ?>
         </div>
         <div class="col-md-2">
          <div class="container mt-4">
             <center>
             <a href="rem_cource.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M1.293 1.293a1 1 0 0 1 1.414 0L8 6.586l5.293-5.293a1 1 0 1 1 1.414 1.414L9.414 8l5.293 5.293a1 1 0 0 1-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 0 1-1.414-1.414L6.586 8 1.293 2.707a1 1 0 0 1 0-1.414z"/>
</svg></button></a>
           </center>
          </div>
         </div>
       </div>
     </div>

   <?php } ?>
   </div>
   <div class="col-md-5">

    <?php
       
       if (isset($_GET['id'])) 
       {
          include 'edit_cource.php';
       }

    ?>
     
   </div>
 </div>





</div>















<br>


</form>
</body>
</html>