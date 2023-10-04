<?php
    include("config.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `facility` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vfacility.php";</script>';
?>