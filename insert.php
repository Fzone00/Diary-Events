<?php
    require_once 'dbconfig.php';
    
    $DataTime = $_POST['ACTIVITY_DATE'];
    $Event = $_POST['ACTIVITY_EVENT'];
    $sql = "INSERT INTO `activity`(`ACTIVITY_ID`,`ACTIVITY_DATE`, `ACTIVITY_EVENT`,) VALUES (NULL,'".$DataTime."','".$Event."')";
    echo $sql;
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header('Location: http://localhost/test/');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
