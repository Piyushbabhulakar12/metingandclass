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


	</style>
</head>
<body>
<form method="post">
	


<?php include 'navbar.php'; ?>



<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: #3AB54A;">Shedule Event</h2>
    </div>
  </div>



<div class="container mt-4">
	<div class="row">
		<div class="col-md-6 mt-3">
			
            
            <h6 class="text_pa">Event Name</h6>
            <input type="text" name="e_name" placeholder="Enter Event Name" class="form-control" required>

             <h6 class="text_pa">Event Shedule By</h6>
             <input type="text" name="e_by" placeholder="Enter Event Shedule By" class="form-control" required>

            <h6 class="text_pa">Meeting Link</h6>
            <input type="text" name="e_link" placeholder="Enter Meeting Link" class="form-control" required>

            <h6 class="text_pa">Event Date</h6>
            <input type="date" name="e_date" class="form-control" required>

            <div class="row">
            	<div class="col-md-6">
            		<h6 class="text_pa">Event From</h6>
            		<input type="time" name="e_from" class="form-control" required>
            	</div>
            	<div class="col-md-6">
            		<h6 class="text_pa">Event To</h6>
            		<input type="time" name="e_to" class="form-control" required>
            	</div>
            </div>


            <div class="row">
            	<div class="col-md-6">
            		<h6 class="text_pa">Event Location</h6>
            		<input type="text" name="e_location" placeholder="Enter Location" class="form-control" required>
            	</div>
            	<div class="col-md-6">
            		<h6 class="text_pa">Event Member Limit</h6>
            		<input type="number" name="e_limit" placeholder="Enter Event Member Limit" class="form-control" required>
            	</div>
            </div>

            <h6 class="text_pa">Event Description</h6>
            <textarea name="e_des" placeholder="Enter Event Description" rows="6" class="form-control" required></textarea>

            
            <div class="row mt-3">
            	<div class="col-md-4">
            		<input type="submit" name="submit" value="Shedule Event" class="btn btn-dark">
            	</div>
            </div>
   

		</div>
		<div class="col-md-6">
			<div class="container">
				
				<div class="">
        	 <div class="float-start">
         	ALL EVENT 
         </div>
         <div class="float-end">
         	<a href="all_shedule.php" style="text-decoration: none; color: #3AB54A;">SEE ALL</a>
         </div>
        </div>
<br><br>




<div class=" mt-2">
           	 <?php
          
           include '../conn.php';

           $sql = " select * from shedule_event ORDER BY id DESC LIMIT 6 ";

           $run = mysqli_query($conn,$sql);

           while ($row = mysqli_fetch_array($run)) 
           {

           ?>
           	<div class="card mt-2 p-3">
       
               
              <div class="row">
              	<div class="col-8">
              		<?php echo $row['e_name']; ?>
              	</div>
              	<div class="col-4" style="text-align: right;">
                     
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
</svg> <span style="font-size: 12px; color: #3AB54A;"><?php echo $row['e_limit']; ?></span>

              	</div>
              </div>

           	</div>
           	 <?php } ?>
           </div>





			</div>
		</div>
	</div>
</div>







</div>

<br><br>


<?php

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

	$sql = " insert into shedule_event (e_name,e_by,e_link,e_date,e_from,e_to,e_location,e_limit,e_des) values ('$e_name','$e_by','$e_link','$e_date','$e_from','$e_to','$e_location','$e_limit','$e_des') ";

	if (mysqli_query($conn,$sql)) 
	{
		include 'notisuc.php';
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