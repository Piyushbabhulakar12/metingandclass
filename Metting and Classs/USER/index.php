<?php

session_start();

if ($_SESSION['email'] == true) 
{
   $_SESSION['email'];
}
else
{
  header("location:logout.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include 'navbar.php'; ?>



<br><br><br><br><br><br>
<div class="center_div mt-5">
  <h2 class="text_p" style="color: #3AB54A;">WE BELIEVE IN LEARNING</h2>
  <h2 class="text_p">THROUGH MAKING</h2>
  <div class="container">
    <h6 style="text-align: center; font-size: 12px; padding-top: 10px; line-height: 18px; color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vehicula dui sit amet ligula cursus, <br>eget molestie diam,Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br> Duis vehicula dui sit amet ligula cursus, eget molestie diam</h6>
  </div>
</div>

<br><br>
<br><br>
<div class="container mt-5">
 <center>
    <div class="doto">

</div>
 </center>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/4778413/pexels-photo-4778413.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="..." style="height: 500px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/6532521/pexels-photo-6532521.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="..." style="height: 500px; object-fit: cover;" style="height: 500px; object-fit: cover;">
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/6237967/pexels-photo-6237967.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="d-block w-100" alt="..." style="height: 500px; object-fit: cover;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <i class="fa fa-long-arrow-left" aria-hidden="true" style="font-size: 35px; color: #fff;"></i>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
   <i class="fa fa-long-arrow-right" aria-hidden="true" style="font-size: 35px; color: #fff;"></i>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <h2 style="color: #3AB54A;">LEARNING PROGRAMS</h2>
    </div>
     <div class="col-md-6">
      <a href="view_all_programs.php" style="color: #001; margin-top: 10px;"><h6 style="text-align: right;">VIEW All</h6></a>
    </div>
  </div>
</div>


<div class="container mt-5">
  <div class="row">
    <?php
     
     include '../conn.php';

     $sql = " select * from c_cource where status = 'Active' ";

     $run = mysqli_query($conn,$sql);
      
    while ($row = mysqli_fetch_array($run)) 
    {
      
    ?>
    <div class="col-md-4 mt-4">
      <div class="card shadow" style="border:none;">
        <img src="../Image/<?php echo $row['c_img']; ?>" style="width: 100%; height: 200px; object-fit: cover;">
        <div class="card-body">
          <h5><?php echo $row['c_name']; ?></h5>
          <hr>
         <a href="cource_catvideo.php?id=<?php echo $row['id']; ?>"><button class="btn btn-dark rounded-0 float-end">LEARN MORE</button></a>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>

<br><br>
<center>
  <h3 style="color: #3AB54A;">MAKE BY YOURSELF</h3>
  <h3>COMPLETE STEP-BY-STEP INSTRUCTIONS</h3>
</center>


<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="border:none;">
        <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" style="width: 100%; height: 200px;">
        <h5 style="padding: 10px; font-size: 16px;">JAVA PROGRAMMING</h5>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="border:none;">
        <img src="https://images.unsplash.com/photo-1599507593499-a3f7d7d97667?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width: 100%; height: 200px;">
        <h5 style="padding: 10px; font-size: 16px;">PHP PROGRAMMING</h5>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="border:none;">
        <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" style="width: 100%; height: 200px;">
        <h5 style="padding: 10px; font-size: 16px;">HTML/CSS PROGRAMMING</h5>
      </div>
    </div>
  </div>
</div>



</div>













<?php include 'footer.php'; ?>

</body>
</html>