<?php
    include("config.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `course` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vcourse.php";</script>';
?>