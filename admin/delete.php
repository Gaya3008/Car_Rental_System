<?php

require_once"dbconfig.php";
$n=iud("delete from car_for_rant where id='".$_REQUEST['id']."'");
if($n==1)
{
	echo"<script>
		 window.location='view_book.php';
		 </script>";
}
else
{
	echo"<script>alert('Something Went Wrong');
		 window.location='view_book.php';
		 </script>";
}


?>