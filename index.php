<!DOCTYPE html>
<html>
<head>
	<title>Eve SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>

	<?php
		//include('php_action/retrieve.php');
	?>
	<div class="container">
		<div class="row-sm-3">
		
		</div>
		<div class="row-sm-6" >
			<h1 style="text-align: center; ">TimeLine</h1>
			
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Data</button>

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
						please Input  Data;
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form action="insert.php" method="post">
				
				<div class="modal-body">
					<label class="control-label col-sm-2" >DataTime:</label>
						<input type="text"name="ACTIVITY_DATE"><br>
					<label class="control-label col-sm-2" >Event:</label>
						<input type="text"name="ACTIVITY_EVENT"><br>	
					
				</div>
				<div class="modal-footer">
				<button type="submit" class="btn btn-success">Submit</button>
						<button type="reset" class="btn btn-warning">Reset</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
				</form>
				</div>

			</div>
			</div>
			<?php 
				require('release.php');
				//code($data))
			?>
			<table class="table">
				<thead>
					<tr>
						<th>Order</th>
						<th>DataTime</th>
						<th>Event</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=1;
						foreach($output['data']as $row)	{
					?>
					<tr>
						<td><?=$i?></td>
						<td><?=$row[0]?></td>
						<td><?=$row[1]?></td>
					<td> <button class="btn btn-warning" ><i class="fa fa-pencil" aria-hidden="true"></i></i> Edit</button>                                    
 	  					<button class="btn btn-danger"    onclick="deleteMember(<?=$row[0]?>)">Delete</button>
                                    
					</tr>
					<?php
						$i++;
						}

					?>
				</tbody>
			</table>
	</div>
	<script type="text/javascript">
		function deleteMember(id){
		// alert(id+'Cleck')
		$.ajax({
			url:'delete.php',
			type:'post',
			date: {did;id};
			success:function(response){
				if(response.success==true){
					window.location.replace();
				}
			}
		});
	}
</script>
	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	

	

</body>
</html>