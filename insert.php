<?php
    require_once 'dbconfig.php';
    
    $DataTime = $_POST['DATE'];
    $Event = $_POST['EVENT'];
    $Type = $_POST['TYPE'];

    $sql = "INSERT INTO `activity`(`DATE`, `EVENT`, `TYPE`)  VALUES ('$DataTime', '$Event', '$Type')";

    
    $query = mysqli_query($conn , $sql);

    if ($query) {
        echo "New record created successfully";
       header('Location: http://localhost/Diary-Events/');
    }
?>
