<?php
session_start();
$cid=mysqli_connect("localhost","root","","car_rental") or die ("connection error") ;


function iud($query)
{
	$cid=mysqli_connect("localhost","root","","car_rental") or die ("connection error") ;
	$result=mysqli_query($cid,$query);
	$n=mysqli_affected_rows($cid);
	mysqli_close($cid);
	return $n;
}

function select($query)
{
$cid=mysqli_connect("localhost","root","","car_rental") or die ("connection error") ;
	$result=mysqli_query($cid,$query);
	mysqli_close($cid);
	return $result;
	
}


?>