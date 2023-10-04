<?php
    include("config.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `users` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vusers.php";</script>';
?>