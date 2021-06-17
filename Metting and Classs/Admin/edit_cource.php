

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
	

	


<div class="container">
  <h5>EDIT COURCES</h5>
</div>

<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from c_video where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>


<div class="container">
  
  <h6 class="text_pa">Courses Video</h6>
  <iframe src="<?php echo $row['video_m']; ?>" frameborder="0" clipboard-write; encrypted-media; gyroscope; allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="height: 200px; width: 100%;"></iframe>

   <h6 class="text_pa">Edit Video Link</h6>
   <input type="text" name="video_m" value="<?php echo $row['video_m']; ?>" class="form-control">

   <h6 class="text_pa">Title</h6>
   <input type="text" name="c_title" value="<?php echo $row['c_title']; ?>" class="form-control">

   <h6 class="text_pa">Catagori</h6>
   <input type="text" name="catagori_c" value="<?php echo $row['catagori_c']; ?>" class="form-control">

   <h6 class="text_pa">Status</h6>
   <?php
                       
                       if ($row['status'] == 'Active') 
                       {
                        ?>
                            <button type="submit" name="dicative" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16" style="color: #198754;">
  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
</svg></button>
                        <?php
                       }
                       else
                       {
                        ?>
                           <button type="submit" name="active" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16" style="color: #dc3545;">
  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
</svg></button>
                        <?php
                       }

            ?>
            

            <?php

             $id = $_GET['id'];
                     
                     include '../conn.php';

                     if (isset($_POST['dicative'])) 
                     {
                      $sql = " update c_video set status = 'Deactivate' where id = '$id' ";
                         
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

<?php

             $id = $_GET['id'];
                     
                     include '../conn.php';

                     if (isset($_POST['active'])) 
                     {
                      $sql = " update c_video set status = 'Active' where id = '$id' ";
                         
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


            <div class="container mt-3">
             <div class="row">
                <div class="container">
                  <input type="submit" name="submit" value="Update" class="btn btn-success w-100">
                </div>
              <a href="all_cources.php"><input type="button" name="" value="Cancel" class="btn btn-danger w-100"></a>
             </div>
            </div>



</div>




<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['submit'])) 
{
 
   $video_m = $_POST['video_m'];
   $c_title = $_POST['c_title'];
   $catagori_c = $_POST['catagori_c'];


   $sql = " update c_video set video_m = '$video_m' , c_title = '$c_title', catagori_c = '$catagori_c' where id = '$id' ";

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