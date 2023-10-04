<?php
include 'session.php';
$id = $_GET['id'];
$status = $_GET['status'];
$pcheck= mysqli_query($con,"select * from poll where id = '$id'");
$psql = mysqli_fetch_array($pcheck);

if($status)
{
    if($status == "opt1")
    {
        $count  = $psql[6] + 1;
        $query = "UPDATE `poll` SET `opt1Count`='$count' WHERE id='$id'";
    }
    else
    if($status == "opt2")
    {
        $count  = $psql[7] + 1;
        $query = "UPDATE `poll` SET `opt2Count`='$count' WHERE id='$id'";
    }
    else
    if($status == "opt3")
    {
        $count  = $psql[8] + 1;
        $query = "UPDATE `poll` SET `opt3Count`='$count' WHERE id='$id'";
    }
    else
    {
        $count  = $psql[9] + 1;
        $query = "UPDATE `poll` SET `opt4Count`='$count' WHERE id='$id'";
    }
    mysqli_query($con,$query);
    echo '<script>alert("Poll Updated..!!"); window.location.href = "opolls.php";</script>';
}


?>