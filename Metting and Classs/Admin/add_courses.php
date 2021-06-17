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
      <h2 style="color: #3AB54A;">ADD COURSES</h2>
    </div>
  </div>



<div class="container">
  <div class="row">
    <div class="col-md-6 mt-3">
      
       <h6 class="text_pa">Courses Title</h6>
       <input type="text" name="c_title" placeholder="Course Title" class="form-control" required>
       <h6 class="text_pa">Choose Catagori</h6>
       <select name="catagori_c" class="form-control" required>
             <option value="">--Select--</option>
                    
                    <?php
                    
                    include '../conn.php';
                     
                    $sql = " select * from c_cource ";

                    $run = mysqli_query($conn,$sql);

                    while ($row = mysqli_fetch_array($run)) 
                    {
                      ?>

                         <option value="<?php echo $row['c_name']; ?>"><?php echo $row['c_name']; ?></option>

                      <?php
                    }
                    
                    ?>


              </select>

              <h6 class="text_pa">Enter Youtube Share Embed Code </h6>
              <textarea name="video_m" rows="3" cols="25" placeholder="Enter Youtube Share Embed Code " class="form-control" required></textarea>

              <h6 class="text_pa">Enter Youtube Video Id</h6>
              <input type="text" name="yv_id" placeholder="Enter Youtube Video Id" class="form-control" required>


              <div class="mt-4">
                <div class="row">
                  <div class="col-md-4">
                    <input type="submit" name="submit" value="Upload" class="btn btn-dark w-100">
                  </div>
                </div>
              </div>


 

    </div> 
    <div class="col-md-6 mt-3">



 <div class="">
           <div class="float-start">
          ALL COURSES 
         </div>
         <div class="float-end">
          <a href="all_cources.php" style="text-decoration: none; color: #3AB54A;">SEE ALL</a>
         </div>
        </div>
<br><br>
           <div class=" mt-2">
             <?php
          
           include '../conn.php';

           $sql = " select * from c_video ORDER BY id DESC LIMIT 6 ";

           $run = mysqli_query($conn,$sql);

           while ($row = mysqli_fetch_array($run)) 
           {

           ?>
            <div class="card mt-2 p-3">
       

               
              <div class="row">
                <div class="col-10">
                  <div style=" white-space: nowrap; overflow: hidden; "><?php echo $row['c_title']; ?></div>
          
                </div>
                <div class="col-2" style="text-align: right;">
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







<?php

include '../conn.php';

if (isset($_POST['submit'])) 
{
   $c_title = $_POST['c_title'];
   $catagori_c = $_POST['catagori_c'];
   $video_m = $_POST['video_m'];
   $yv_id = $_POST['yv_id'];

   $sql = " insert into c_video (c_title,catagori_c,video_m,yv_id) values ('$c_title','$catagori_c','$video_m','$yv_id') ";

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