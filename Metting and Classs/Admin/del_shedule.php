<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " delete from shedule_event where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:all_shedule.php");
}
else
{
	echo "Not Done";
}

?>