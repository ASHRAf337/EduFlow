<?php
include("config.php");
session_start();
$sid=$_SESSION['uid'];
$chk=mysqli_query($con,"select * from student where id='$sid' ");
$c=mysqli_fetch_array($chk);
// $usr_id=$c[0];
// $usr_name=$c[1];

$course_id = $c[7];
if(!isset($_SESSION['uid']))
{

session_destroy();
	header("Location: index.php");

}
?>