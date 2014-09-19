	<!DOCTYPE html>

	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Booking</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->

		<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->

		<!--script src="<?=base_url();?>asset/js/less-1.3.3.min.js"></script-->

		<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

		<link href="<?=base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url();?>asset/css/style.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->

  <!--[if lt IE 9]>

    <script src="<?=base_url();?>asset/js/html5shiv.js"></script>

    <![endif]-->
    <!-- Fav and touch icons -->

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="<?=base_url();?>asset/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>asset/js/scripts.js"></script>

</head>
<body>
	<div class="container">
		<br>
		<div class="row clearfix">
			<div class="col-md-6 column">
				<div class="panel panel-primary">
					<div class="panel-heading">Datepicker</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6 column col-md-offset-1">
								<div class="date" >
									
								</div>
							</div>
							<div class="col-md-4 column">
								<select class="form-control block">
									<option>1 Person</option>
									<option>2 Person</option>
									<option>3 Person</option>
									<option>4 Person</option>
									<option>5 Person</option>
								</select>
							</div>
							<br>
							<br>
							<div class="col-md-4 column">
								<select class="form-control block">
									<option>Breakfast</option>
									<option>Lunch</option>
									<option>Dinner</option>
								</select>
							</div>
							<div class="col-md-4 column">
								<span class="disp"></span>
							</div>
						</div>
							
					</div>
				</div>
			</div>
			<div class="col-md-6 column">
				<div class="alert alert-warning" role="alert">Sorry, there isn’t a table matching your selection.
					You can check availability by changing the date, party size or session.</div>
					<div class="panel panel-primary">
						<div class="panel-heading">Select an option below:</div>
						<div class="panel-body">
							Standard À La Carte <button type="button" class="btn btn-sm btn-primary col-md-offset-6">Booking</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
		<script>
			$('.date').datepicker({ 
				todayHighlight: true,
				beforeShowDay: function (date){
					$('.date').click(function  () {
						$(".disp").html(date);
					});
					
				}
			});
		</script>
	</body>
</html>

