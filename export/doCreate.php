<?php
	require_once "config.php";

	//print_r($_POST);die();

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
    


    $sql = "INSERT INTO `project`"
    ." (`id`, `department`, `projectName`, `subject`, `dateOut`, `getDateIn`, `projectNumber`, `nameStore`, `telStore`, `faxStore`, `addressStore`, `emStore`, `emNStore`, `bankNStore`, `bankAStore`, `bankStore`, `bankBStore`)"
    ." VALUES (NULL, '$department', '$projectName', '$subject', '$dateOut', '$getDateIn', '$projectNumber', '$nameStore', '$telStore', '$faxStore', '$addressStore', '$emStore', '$emNStore', '$bankNStore', '$bankAStore', '$bankStore', '$bankBStore');";

    $query = null;
    $query = mysqli_query($conn,$sql);  
	// $query = null;
	// if($firstname && $lastname && $tel){
	// 	$query = mysqli_query($conn,$sql);		
	// }
	
?>

<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
	if($query){
		echo "เพิ่มข้อมูลสำเร็จ";		
	}else {
		echo "เพิ่มข้อมูลไม่สำเร็จ";		
	}

?>
<br/>
<a href="index.php">Index</a>
</body>
</html>

