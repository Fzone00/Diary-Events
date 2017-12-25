<?php
require_once 'dbconfig.php';


$sql = "SELECT activity.DATE,activity.ID, type.ACTIVITY_EVENT, activity.EVENT FROM activity INNER JOIN type ON activity.TYPE=type.TYPE ORDER BY `activity`.`DATE` DESC";

$result = mysqli_query($conn,$sql);

$data = [];
	date_default_timezone_set('Asia/Bangkok');
	$today_date=date("d-M-Y");
	$today_time=date("h:i:s: a");
	echo "<b>Today is </b> $today_date $today_time";

while($row = $result->fetch_assoc()) {
    $output['data'][] = array($row["ID"],$row["DATE"],$row["ACTIVITY_EVENT"],$row["EVENT"]);
}
//var_dump(json_encode($data));
?>