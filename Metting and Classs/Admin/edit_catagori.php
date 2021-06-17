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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
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
      <h2 style="color: #3AB54A;">EDIT CATEGORY</h2>
    </div>
  </div>


<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " select * from c_cource where id = '$id' ";

$run = mysqli_query($conn,$sql);

$row = mysqli_fetch_array($run);

?>

<div class="row m-auto">
  <div class="col-md-6 mt-3">
      
      <h6 class="text_pa">Category  Courses Name</h6>
      <input type="text" name="c_name" value="<?php echo $row['c_name']; ?>" class="form-control">

      <h6 class="text_pa">Category  Courses Description</h6>
      <textarea name="c_des" rows="7" placeholder="Enter Category  Description" class="form-control"><?php echo $row['c_des']; ?></textarea>


<h6 class="text_pa">Category  Courses Image</h6>
      <div class="row">
        <div class="col-md-4">
          <img src="../Image/<?php echo $row['c_img']; ?>" style="width: 100%; height: 120px;">
        </div>
        <div class="col-md-8">
           <input type="file" name="c_img" id="file" class="inputfile">
      <label for="file">ADD IMAGE</label><br>
      <input type="submit" name="img1" value="Upload Image" class="btn btn-dark mt-3">
        </div>
      </div>




<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['img1'])) 
{

    $c_img = $_FILES['c_img'] ['name'];

    $image_tmp_name = $_FILES['c_img']['tmp_name'];
   
    move_uploaded_file($image_tmp_name, "../Image/$c_img");


   $sql = " update c_cource set c_img = '$c_img' where id = '$id' ";

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

      <h6 class="text_pa">Active</h6>


<?php
                       
                       if ($row['status'] == 'Active') 
                       {
                        ?>
                            <button type="submit" name="dicative" class="btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16" style="color: #3AB54A;">
  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
</svg></button>
                        <?php
                       }
                       else
                       {
                        ?>
                           <button type="submit" name="active" class="btn" ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
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
                      $sql = " update c_cource set status = 'Deactivate' where id = '$id' ";
                         
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
                      $sql = " update c_cource set status = 'Active' where id = '$id' ";
                         
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













     

              
              <div class="mt-4">
                <div class="row">
                  <div class="col-md-4">
                    <input type="submit" name="submit" value="Update" class="btn btn-dark w-100">
                  </div>
                  <div class="col-md-4">
                    <a href="all_catagori.php"><input type="button" name="" value="Cancel" class="btn btn-outline-danger w-100"></a>
                  </div>
                </div>
              </div>
      

    </div>
</div>




</div>
<br><br>



<?php

$id = $_GET['id'];

include '../conn.php';

if (isset($_POST['submit'])) 
{
 
   $c_name = $_POST['c_name'];
   $c_des = $_POST['c_des'];

   $sql = " update c_cource set c_name = '$c_name' , c_des = '$c_des' where id = '$id' ";

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