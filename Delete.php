<?php 
  require_once 'dbconfig.php';

	$strCustomerID = $_GET["id"];

    $sql = "DELETE FROM `activity` WHERE `ID`  =  ".$_GET['id'];


    $query = mysqli_query($conn,$sql);
 if ($submit=="DEL"){
              $sql="delete from tbl_sex where sex_id =".$id_delete;
              mysql_query($sql);
       }



       if ($query) {
       header('Location: http://localhost/Diary-Events/');
        }

?>