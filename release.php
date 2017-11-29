<?php
require_once 'dbconfig.php';

$sql = "SELECT * FROM `activity` ORDER BY `activity`.`ACTIVITY_DATE` DESC";

$result = mysqli_query($conn,$sql);

$data = [];

while($row = $result->fetch_assoc()) {
    $output['data'][] = array($row["ACTIVITY_DATE"],$row["ACTIVITY_EVENT"]);
}
//var_dump(json_encode($data));
?>