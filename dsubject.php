<?php
    include("config.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `subject` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vsubject.php";</script>';
?>