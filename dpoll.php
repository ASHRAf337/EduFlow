<?php
    include("config.php");
    $id= $_GET['id'];
    $status= $_GET['status'];
    mysqli_query($con,"UPDATE `poll` SET `status`='$status' WHERE id='$id'");
    echo '<script>alert("Updated successfully"); window.location.href = "opolls.php";</script>';
?>