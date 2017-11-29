<?php 
  require_once 'dbconfig.php';

    
    $sql = "SELECT * FROM `activity` WHERE `ACTIVITY_ID` =  ".$_GET['id'];

    $query = mysqli_query($conn , $sql);

    $data = mysqli_fetch_assoc($query);
   
?>
				<form action="doEdit.php?id=<?=$_GET['id'] ?>" method="post">
				
				<div class="modal-body">
					<label name="ACTIVITY_ID">ID : <?=$_GET['id'] ?> </label><br>
					<label class="control-label col-sm-2" >DataTime:</label>
						<input type="" name="ACTIVITY_DATE" value="<?=$data['ACTIVITY_DATE']?>"><br>
					<label class="control-label col-sm-2 " >Event:</label>
						<input type="" name="ACTIVITY_EVENT" value="<?=$data['ACTIVITY_EVENT']?>"><br>	
					
				</div>
				<div class="modal-footer">
				<button type="submit" class="btn btn-success">Submit</button>
				</div>
				</form>

