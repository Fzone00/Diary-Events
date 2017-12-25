<?php 
  require_once 'dbconfig.php';


    
    $sql = "SELECT * FROM `activity` WHERE `ID` =  ".$_GET['id'];

    $query = mysqli_query($conn , $sql);

    $data = mysqli_fetch_assoc($query);
   
?>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

				<form action="doEdit.php?id=<?=$_GET['id'] ?>" method="post">
				
				<div class="modal-body">
					<label name="ID">ID : <?=$_GET['id'] ?> </label><br>
					<label class="control-label col-sm-2" >DataTime:</label>
						<input type="" name="DATE" value="<?=$data['DATE']?>"><br>
					<label class="control-label col-sm-2 " >Type:</label>
						<input type="" name="TYPE" value="<?=$data['TYPE']?>"><br>	
					<label class="control-label col-sm-2 " >Event:</label>
						<input type="" name="EVENT" value="<?=$data['EVENT']?>"><br>						
				</div>
				<div class="modal-footer">
				<button type="submit" class="btn btn-success">Submit</button>
				<button type="cancel" class="btn btn-danger">cancel</button>
				</div>
				</form>		
