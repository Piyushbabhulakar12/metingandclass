<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " delete from c_video where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:all_cources.php");
}
else
{
	echo "Not Done";
}

?>