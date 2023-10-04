<?php
    include("config.php");
    $id= $_GET['id'];
    mysqli_query($con,"UPDATE `student` SET `status`='inactive' WHERE id='$id'");
    echo '<script>alert("Deleted successfully"); window.location.href = "vstudent.php";</script>';
?>