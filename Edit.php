<?php 
  require_once 'dbconfig.php';

      }  
        
        
  
    $DataTime = $_POST['ACTIVITY_DATE'];
    $Event = $_POST['ACTIVITY_EVENT'];

    $sql = "UPDATE `Diary-Events` SET `ACTIVITY_DATE`= '$DataTime',`ACTIVITY_EVENT`= '$Event' WHERE activity.id = $id";

    $query = mysqli_query($conn , $sql);

    if ($query) {
          header('Location: index.php');
        }

?>