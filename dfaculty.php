<?php
    include("config.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `faculty` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vfaculty.php";</script>';
?>