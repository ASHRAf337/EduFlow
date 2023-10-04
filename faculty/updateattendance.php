<?php
include("session.php");
$studentid = $_POST['studentid'];
$subjectid = $_POST['subjectid'];
$attendance = $_POST['attendance'];
$date = $_POST['date'];

$check = mysqli_query($con,"select * from attendancedetails where studentid = '$studentid' and subjectid = '$subjectid' and date = '$date'");
if(mysqli_num_rows($check) > 0){

    $r = mysqli_fetch_array($check);
// Perform the update query
$sql = "UPDATE `attendancedetails` SET `studentid`='$studentid',`subjectid`='$subjectid',`attendance`='$attendance',`date`='$date' WHERE id = $r[0]"; // Assuming the id is 1, change it according to your needs
if (mysqli_query($con, $sql)) {
    if($attendance == 1){
        echo "Attendance marked as Present Successfully!";
    }
    else{
        echo "Attendance marked as Absent Successfully!";
    }
   
} else {
    echo "Error occurred while updating the table: " . mysqli_error($con);
}
}
else{
    $sql = "INSERT INTO `attendancedetails`(`studentid`, `subjectid`, `attendance`, `date`) VALUES ('$studentid','$subjectid','$attendance','$date ')"; // Assuming the id is 1, change it according to your needs
if (mysqli_query($con, $sql)) {
    if($attendance == 1){
        echo "Attendance marked as Present Successfully!";
    }
    else{
        echo "Attendance marked as Absent Successfully!";
    }
} else {
    echo "Error occurred while updating the table: " . mysqli_error($con);
}
}
?>