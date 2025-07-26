<?php 
include"dbconfig.php";
echo $n=iud("update register set `active`='1' where id='".$_REQUEST['id']."'");

if($n==1)
{
	echo"<script>window.location='tables.php';</script>";
}
else
{
	echo"<script>
	alert('Something Went Wrong Please Try Again');
	window.location='tables.php';</script>";
}

?>