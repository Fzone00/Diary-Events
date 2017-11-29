<?php
    require_once 'dbconfig.php';
    
    $DataTime = $_POST['ACTIVITY_DATE'];
    $Event = $_POST['ACTIVITY_EVENT'];

    $sql = "INSERT INTO `activity`(`ACTIVITY_DATE`, `ACTIVITY_EVENT`) VALUES ('$DataTime', '$Event')";

    
    $query = mysqli_query($conn , $sql);

    if ($query) {
        echo "New record created successfully";
       header('Location: http://localhost/Diary-Events/');
    }
?>
