<?php 
	require_once 'dbconfig.php';


	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	if (isset($_POST['EVENT'])) {
		$Event = $_POST['EVENT'];
	}
	if (isset($_POST['TYPE'])) {
		$Type = $_POST['TYPE'];
	}
	if (isset($_POST['DATE'])) {
		$DataTime = $_POST['DATE'];
	}

	
	/*$DataTime = $_POST['ACTIVITY_DATE'];
	$Event = $_POST['ACTIVITY_EVENT'];*/

    $sql = "UPDATE `activity` SET `DATE` = '$DataTime', `TYPE` = '$Type', `EVENT` = '$Event' WHERE `activity`.`ID` = $id";

    $query = mysqli_query($conn , $sql);

    if ($query) {
       header('Location: http://localhost/Diary-Events/');
        }

?>