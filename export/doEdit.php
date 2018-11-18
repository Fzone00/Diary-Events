<?php
	require_once "config.php";

	//print_r($_POST);die();
	$id = $_POST['id'];
	$department = $_POST['department'];
	$projectName = $_POST['projectName'];
	$subject = $_POST['subject'];
    $dateOut = $_POST['dateOut'];
    $getDateIn = $_POST['getDateIn'];
    $projectNumber = $_POST['projectNumber'];
    $nameStore = $_POST['nameStore'];
    $telStore = $_POST['telStore'];
    $faxStore = $_POST['faxStore'];
    $addressStore = $_POST['addressStore'];
    $emStore = $_POST['emStore'];
    $emNStore = $_POST['emNStore'];
    $bankNStore = $_POST['bankNStore'];
    $bankAStore = $_POST['bankAStore'];
    $bankStore = $_POST['bankStore'];
    $bankBStore = $_POST['bankBStore'];


    $sql = "UPDATE `project` SET `department` = '$department', `projectName` = '$projectName', `subject` = '$subject', `dateOut` = '$dateOut', `getDateIn` = '$getDateIn', `projectNumber` = '$projectNumber', `nameStore` = '$nameStore', `telStore` = '$telStore', `faxStore` = '$faxStore', `addressStore` = '$addressStore', `emStore` = '$emStore', `emNStore` = '$emNStore', `bankNStore` = '$bankNStore', `bankAStore` = '$bankAStore', `bankStore` = '$bankStore', `bankBStore` = '$bankBStore' WHERE `project`.`id` = $id;";


    $query = null;
    $query = mysqli_query($conn,$sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doEdit Page</title>
</head>
<body>
<?php
	if($query){
		echo "แก้ไขข้อมูลสำเร็จ";		
	}else {
		echo "แก้ไขข้อมูลไม่สำเร็จ";		
	}

?>
<br/>
<a href="index.php">Index</a>
</body>
</html>