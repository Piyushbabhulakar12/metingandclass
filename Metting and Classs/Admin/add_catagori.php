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
<form method="post" enctype="multipart/form-data">
	


	
	<?php include 'navbar.php'; ?>






<div class="container mt-4">
  <div class="row">
    <div class="col-md-12">
      <h2 style="color: #3AB54A;">ADD CATEGORY</h2>
    </div>
  </div>


 <div class="container mt-4">
 	<div class="row">
 		<div class="col-md-6 mt-3">
 			
 			<h6 class="text_pa">Category  Courses Name</h6>
 			<input type="text" name="c_name" placeholder="Enter Category  Name" class="form-control">

 			<h6 class="text_pa">Category  Courses Description</h6>
 			<textarea name="c_des" rows="7" placeholder="Enter Category  Description" class="form-control"></textarea>

 			<h6 class="text_pa">Category  Courses Image</h6>
 			<input type="file" name="c_img" id="file" class="inputfile">
 			<label for="file">ADD IMAGE</label>

              
              <div class="mt-4">
              	<div class="row">
              		<div class="col-md-4">
              			<input type="submit" name="submit" value="Create" class="btn btn-dark w-100">
              		</div>
              	</div>
              </div>
      

 		</div>
 		<div class="col-md-6 mt-3">

        <div class="">
        	 <div class="float-start">
         	ALL CATEGORY 
         </div>
         <div class="float-end">
         	<a href="all_catagori.php" style="text-decoration: none; color: #3AB54A;">SEE ALL</a>
         </div>
        </div>
<br><br>
           <div class=" mt-2">
           	 <?php
          
           include '../conn.php';

           $sql = " select * from c_cource ORDER BY id DESC LIMIT 6 ";

           $run = mysqli_query($conn,$sql);

           while ($row = mysqli_fetch_array($run)) 
           {

           ?>
           	<div class="card mt-2 p-3">
       
               
              <div class="row">
              	<div class="col-8">
              		<?php echo $row['c_name']; ?>
              	</div>
              	<div class="col-4" style="text-align: right;">
<?php

if ($row['status'] == 'Active') 
{
	?>
	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16" style="color: #3AB54A;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg>

	<?php
}
else
{
	?>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16" style="color: #dc3545;">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
	<?php
}
?>

            
              	</div>
              </div>

           	</div>
           	 <?php } ?>
           </div>


      

 			
 		</div>
 	</div>
 </div>


</div>




  </center>


<?php

include'../conn.php';

if (isset($_POST['submit'])) 
{
	$c_name = $_POST['c_name'];
	$c_des = $_POST['c_des'];

	$c_img = $_FILES['c_img'] ['name'];

    $image_tmp_name = $_FILES['c_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$c_img");

	$sql = " insert into c_cource (c_name,c_des,c_img) values ('$c_name','$c_des','$c_img') ";

	if (mysqli_query($conn,$sql)) 
	{
		include 'notisuc.php';
	}
	else
	{
		
	}
	

}


?>







</form>
</body>
</html>