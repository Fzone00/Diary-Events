<html lang="en"><head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>TimeLine </title>



			<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
				<link href="//fonts.googleapis.com/css?family=Lato:100,400,700" rel="stylesheet">
		<link href="https://fullcalendar.io/css/base.css?3.6.2-1.8.1-2" rel="stylesheet">
		<link rel="stylesheet" href="https://fullcalendar.io/js/fullcalendar-3.6.2/fullcalendar.min.css">
			<script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://fullcalendar.io/js/fullcalendar-3.6.2/fullcalendar.min.js"></script>
	<script src="https://fullcalendar.io/js/home.js?3.6.2-1.8.1-2"></script>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-3534877-8', 'auto');
	ga('send', 'pageview');
</script>
</head>
<body id="index-page">
test
	<div id="head" class="section">
		<div>
			<div class="left">

					<img id="logo" src="fullcalendar.jpg" width="58" height="48">
					<h1>Event Time</h1>
			
			</div>

			<div class="clear"></div>
		</div>
	</div>

	
	<div id="body" class="section">
		<div>
				<div class="two-col" style="table-layout:fixed">
		<div class="content">
			<div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group">
		<div class="sidebar" style="width:215px">

		</div>
	</div>

		</div>
	</div>

	
<div id="foot" >
		<div class="right">
					<button type="button" class ="btn btn-primary" data-toggle="modal" data-target="#addMember">Add Event</button> 
		</div>
<div class="modal fade" role="dialong" id="addMember">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					Please Input Member Data:
				</div>
				<form class="form-horizontal" method="POST" action="phplib/create.php">
					<div class="modal-body">
						<div class="form-group">
							<label class="col-md-2 control-label " >ID: </label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="id">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label" >Fnama: </label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="fname">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label " >Lname: </label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="lane">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-2 control-label " >Contact: </label> 
							<div class="col-md-10">
								<input type="text" class="form-control" name="contact">
							</div>
						</div>

</div>


</body></html>