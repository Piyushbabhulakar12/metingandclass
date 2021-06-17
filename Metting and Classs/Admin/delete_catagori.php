<?php

$id = $_GET['id'];

include '../conn.php';

$sql = " delete from c_cource where id = '$id' ";

if (mysqli_query($conn,$sql)) 
{
	header("location:all_catagori.php");
}
else
{
	echo "Not Done";
}

?>