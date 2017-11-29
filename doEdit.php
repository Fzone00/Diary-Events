<?php 
	require_once 'dbconfig.php';


	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	if (isset($_POST['ACTIVITY_EVENT'])) {
		$Event = $_POST['ACTIVITY_EVENT'];
	}
	if (isset($_POST['ACTIVITY_DATE'])) {
		$DataTime = $_POST['ACTIVITY_DATE'];
	}

	
	/*$DataTime = $_POST['ACTIVITY_DATE'];
	$Event = $_POST['ACTIVITY_EVENT'];*/

    $sql = "UPDATE `activity` SET `ACTIVITY_DATE` = '$DataTime', `ACTIVITY_EVENT` = '$Event' WHERE `activity`.`ACTIVITY_ID` = $id";

    $query = mysqli_query($conn , $sql);

    if ($query) {
       header('Location: http://localhost/Diary-Events/');
        }

?>