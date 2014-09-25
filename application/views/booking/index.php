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
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>asset/js/scripts.js"></script>

</head>
<body>
	<div class="container">
		<br>
		<div class="row clearfix" id="checkTanggal">
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
								<div class="form-group">
									<center><h5><b>
										<div class="disp"></div>
									</b>
								</h5>
							</center>
						</div>
						<div class="form-group">
							<select id="sumPeople" class="form-control block">
								<option value="1">1 Person</option>
								<option value="2">2 Person</option>
								<option value="3">3 Person</option>
								<option value="4">4 Person</option>
								<option value="5">5 Person</option>
							</select>
						</div>
						<div class="form-group">
							<select id="purpose" class="form-control block">
								<option value="pagi">Breakfast</option>
								<option value="siang">Lunch</option>
								<option value="malam">Dinner</option>
							</select>
						</div>
						<div class="form-group">
							<button id="forBook" type="button" class="btn btn-lg btn-block btn-primary" disabled="disabled">Booking</button>
						</div>
						<div id="success" class="alert alert-success" role="alert" style="display:none;"><span class="glyphicon glyphicon-ok"></span><strong> Available</strong></div>
						<div id="fail" class="alert alert-warning" role="alert" style="display:none;"><span class="glyphicon glyphicon-remove"></span><strong> Not Available</strong></div>
					</div>
					
				</div>
				<div class="row">
							<div class="col-md-12 column">
								<div id="notif" class="alert alert-warning" role="alert" style="display:none;">Sorry, there isn’t a table matching your selection.
									You can check availability by changing the date, party size or session.
								</div>
							</div>
						</div>
			</div>
		</div>
	</div>
	<div class="col-md-6 column" >
		<div id="notif" class="alert alert-warning" role="alert" style="display:none;">Sorry, there isn’t a table matching your selection.
			You can check availability by changing the date, party size or session.
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">Select an option below:</div>
			<div class="panel-body">
				Standard À La Carte <button type="button" class="btn btn-sm btn-primary col-md-offset-6">Booking</button>
			</div>
		</div>
	</div>
</div>

<!-- milih jam -->
<div class="row clearfix" id="milihJam" style="display:none;">
			<div class="col-md-12 column">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-1 column">
								<button id="forBack1" type="button" class="btn btn-sm btn-block btn-primary" >Back</button>
							</div>
							
							<div class="col-md-5 column">Select a dining time:</div>
						</div>
					</div>
					
					<div class="panel-body" id="timePanel">
						
					
					</div>
				</div>
			</div>
		</div>
</div>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script>

	$(document ).ready(function () {
		 console.log( "ready!" );
	});
	$('.date').datepicker({ 
		todayHighlight: true
	}).on('changeDate', function(e){ 
			var date = e.format('yyyy-mm-dd');

			checkingDateEngage(date);
			//$('.disp').html(date);  
		});

	$("#forBook").click(function(){
		var validationURL = "http://labs.techarea.co.id/bookingserver/insertdata.php?jsoncallback=?";
		$("#checkTanggal").hide("slow");
		$("#milihJam").show("slow");
	});
	$("#forBack1").click(function(){
		
		$("#checkTanggal").show("slow");
		$("#milihJam").hide("slow");
	});
	//kanggo ngecek wes di booking opo durung;
	function checkingDateEngage(e){
		//kanggo alamate jupuk data
		var validationURL = "http://labs.techarea.co.id/bookingserver/insertdata.php?jsoncallback=?";
		//kanggo argument seng di cek
		//tanggal piro
		var date = e;
		//paanggone
		var people =  $('#sumPeople').val();
		//kanggo opo
		var purpose = $('#purpose').val();

		$.getJSON( 
			validationURL, {tanggal:date ,jml_org:people, tujuan:purpose
			}).done(function(ServerResponse) {

				if(ServerResponse.stats){
					$("#forBook").attr('disabled');
					$("#fail").fadeIn("slow");
					$("#success").fadeOut("slow");
					$("#notif").fadeIn("slow");
				}
				else{
					timeAvailable();
					$("#forBook").removeAttr('disabled');
					$("#success").fadeIn("slow");
					$("#fail").fadeOut("slow");
					$("#notif").fadeOut("slow");
				}	
			});
					
		}

		//fungsi kanggo  reuquest
		function insertRequest (data) {
			// body...
		}

		//fungsi kanggo noto jam

		function timeAvailable(){
			var htmlValue ='';
			for (var i = 1; i <= 15; i++) {
				var time = (i+8);
				htmlValue = htmlValue+'<span style="margin-left:10px;"></span><button id="btnJam'+time+'"type="button" class="btn btn-md btn-primary" value="'+time+'">'+time+'.00</button>';
			};
			$('#timePanel').html(htmlValue+'<br><br><b><span class="glyphicon glyphicon-star"></span>  All 7pm tables are required back at 9pm. Due to a planning restriction, all customers must vacate the restaurant by:Monday - Thursday 11:00pm, Friday - Saturday 11:20pm.</b>');
		}

		$('#btnJam9').click(function  (argument) {
			//kanggo alamate jupuk data
			var validationURL = "http://labs.techarea.co.id/bookingserver/insertdata.php?jsoncallback=?";
			//kanggo argument seng di cek
			//tanggal piro
			var date = e;
			//paanggone
			var people =  $('#sumPeople').val();
			//kanggo opo
			var purpose = $('#purpose').val();
		})
		$('#btnJam10').click(function  (argument) {
			// body...
		})
		$('#btnJam11').click(function  (argument) {
			// body...
		})
		$('#btnJam12').click(function  (argument) {
			// body...
		})
		$('#btnJam13').click(function  (argument) {
			// body...
		})
		$('#btnJam14').click(function  (argument) {
			// body...
		})

		$('#btnJam15').click(function  (argument) {
			// body...
		})
		$('#btnJam16').click(function  (argument) {
			// body...
		})
		$('#btnJam17').click(function  (argument) {
			// body...
		})
		$('#btnJam18').click(function  (argument) {
			// body...
		})
		$('#btnJam19').click(function  (argument) {
			// body...
		})
		$('#btnJam20').click(function  (argument) {
			// body...
		})
		$('#btnJam21').click(function  (argument) {
			// body...
		})
		$('#btnJam22').click(function  (argument) {
			// body...
		})
		$('#btnJam23').click(function  (argument) {
			// body...
		})
</script>
</body>
</html>

