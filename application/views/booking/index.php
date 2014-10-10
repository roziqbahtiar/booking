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
							<select id="sumPeople" class="form-control block" onchange="checkingDateEngage(date)">
								<option value="1">1 Person</option>
								<option value="2">2 Person</option>
								<option value="3">3 Person</option>
								<option value="4">4 Person</option>
								<option value="5">5 Person</option>
							</select>
						</div>
						<div class="form-group">
							<select id="purpose" class="form-control block" onchange="checkingDateEngage(date)">
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
					
					<div class="panel-body" id="timePanel1" style="display:none;">
						<button id="btnJam8"type="button" class="btn btn-md btn-primary" value="08">08.00</button>
						<button id="btnJam9"type="button" class="btn btn-md btn-primary" value="09">09.00</button>
						<button id="btnJam10"type="button" class="btn btn-md btn-primary" value="10">10.00</button>
						<button id="btnJam11"type="button" class="btn btn-md btn-primary" value="11">11.00</button>
						<button id="btnJam12"type="button" class="btn btn-md btn-primary" value="12">12.00</button>
					</div>
					<div class="panel-body" id="timePanel2" style="display:none;">
						<button id="btnJam13"type="button" class="btn btn-md btn-primary" value="13">13.00</button>
						<button id="btnJam14"type="button" class="btn btn-md btn-primary" value="14">14.00</button>
						<button id="btnJam15"type="button" class="btn btn-md btn-primary" value="15">15.00</button>
						<button id="btnJam16"type="button" class="btn btn-md btn-primary" value="16">16.00</button>
						<button id="btnJam17"type="button" class="btn btn-md btn-primary" value="17">17.00</button>
					</div>
					<div class="panel-body" id="timePanel3" style="display:none;">
						<button id="btnJam18"type="button" class="btn btn-md btn-primary" value="18">18.00</button>
						<button id="btnJam19"type="button" class="btn btn-md btn-primary" value="19">19.00</button>
						<button id="btnJam20"type="button" class="btn btn-md btn-primary" value="20">20.00</button>
						<button id="btnJam21"type="button" class="btn btn-md btn-primary" value="21">21.00</button>
						<button id="btnJam22"type="button" class="btn btn-md btn-primary" value="22">22.00</button>

					</div>
				</div>
			</div>
		</div>
	<div class="col-md-12 column" id="detailsContact" style="display:none;">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-md-1 column">
								<button id="forBack2" type="button" class="btn btn-sm btn-block btn-primary" >Back</button>
							</div>
							
							<div class="col-md-5 column"><span class="glyphicon glyphicon-user"></span> Your contact details</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-6 column">
								<form id="profileForm">
									<div class="form-group">
										<label>First name</label>
										<input type="text" class="form-control" name="firstname" />
									</div>
									<div class="form-group">
										<label>Last name</label>
										<input type="text" class="form-control" name="lastname" />
									</div>
									<div class="form-group">
										<label>Email address</label>
										<input type="text" class="form-control" name="email" />
									</div>
									<div class="form-group">
										<label>Phone number</label>
										<input type="text" class="form-control" name="phone" />
									</div>
									<button type="submit" value="submit" class="btn btn-lg btn-block btn-primary">Submit</button>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 column">
							</div>
						</div>
					</div>
				</div>
			</div>
</div>


<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script>
 //========================
	var date;
	$(document ).ready(function () {
		 console.log( "ready!" );
		 $('#profileForm').bootstrapValidator({
    			feedbackIcons: {
    				valid: 'glyphicon glyphicon-ok',
    				invalid: 'glyphicon glyphicon-remove',
    				validating: 'glyphicon glyphicon-refresh'
    			},
    			fields: {
    				firstname: {
    					validators: {
    						notEmpty: {
    							message: 'The First name address is required'
    						}
    					}
    				},
    				lastname: {
    					validators: {
    						notEmpty: {
    							message: 'The Last name address is required'
    						}
    					}
    				},
    				email: {
    					validators: {
    						notEmpty: {
    							message: 'The email address is required'
    						},
    						emailAddress: {
    							message: 'The email address is not valid'
    						}
    					}
    				},
    				phone: {
    					validators: {
    						notEmpty: {
    							message: 'The phone number is required'
    						},
    						integer: {
    							message: 'The phone number is not valid'
    						}
    					}
    				}
    			}
    		});
	});
	$('.date').datepicker({ 
		todayHighlight: true
	}).on('changeDate', function(e){ 
			date = e.format('yyyy-mm-dd');
			checkingDateEngage(date);
			//$('.disp').html(date);  
		});

	$("#forBook").click(function(){
		var validationURL = "http://labs.techarea.co.id/bookingserver/insertdata.php?jsoncallback=?";
		$("#checkTanggal").hide("slow");
		//$("#milihJam").show("slow");
		checkTimeline();
	});
	$("#forBack1").click(function(){
		
		$("#checkTanggal").show("slow");
		//$("#milihJam").hide("slow");
		closeTimePanel();
	});
	$("#forBack2").click(function(){
		
		$("#checkTanggal").hide("slow");
		//$("#milihJam").hide("slow");
		checkTimeline();
		$("#detailsContact").fadeOut("slow");
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
					
					$("#forBook").removeAttr('disabled');
					$("#success").fadeIn("slow");
					$("#fail").fadeOut("slow");
					$("#notif").fadeOut("slow");
					//checkTimeline();
				}	
			});
					
		}
	function checkTimeline(){
		var purpose = $('#purpose').val();
		if (purpose == 'pagi') { 
			$("#milihJam").show("slow");
			$("#timePanel1").fadeIn("slow"); 
			$("#timePanel2").fadeOut("slow");
			$("#timePanel3").fadeOut("slow");
		} 
		else if (purpose == 'siang') { 
			$("#milihJam").show("slow");
			$("#timePanel1").fadeOut("slow"); 
			$("#timePanel2").fadeIn("slow");
			$("#timePanel3").fadeOut("slow");
		} 
		else{ 
			$("#milihJam").show("slow");
			$("#timePanel1").fadeOut("slow"); 
			$("#timePanel2").fadeOut("slow");
			$("#timePanel3").fadeIn("slow");
		}

	}
		//fungsi kanggo  reuquest
		function insertRequest (data) {
			
		}

	function closeTimePanel(a){
		if (a == 'pagi') { 
			$("#milihJam").hide("slow");
			$("#timePanel1").fadeOut("slow"); 
			$("#timePanel2").fadeOut("slow");
			$("#timePanel3").fadeOut("slow");
		} 
		else if (a == 'siang') { 
			$("#milihJam").hide("slow");
			$("#timePanel1").fadeOut("slow"); 
			$("#timePanel2").fadeOut("slow");
			$("#timePanel3").fadeOut("slow");
		} 
		else{ 
			$("#milihJam").hide("slow");
			$("#timePanel1").fadeOut("slow"); 
			$("#timePanel2").fadeOut("slow");
			$("#timePanel3").fadeOut("slow");
		}
	}
		$('#btnJam8').click(function  (a) {
			
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 8!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam9').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 9!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam10').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 10!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam11').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 11!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam12').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 12!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam13').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 13!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam14').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 14!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})

		$('#btnJam15').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 15!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam16').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 16!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);

		})
		$('#btnJam17').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 17!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam18').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 18!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam19').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 19!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam20').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 20!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam21').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 21!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam22').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 22!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
		$('#btnJam23').click(function  (argument) {
			var val = $("#purpose").val();
			var person = $("#sumPeople").val();
			console.log( "jam 23!" +val+person);
			$("#detailsContact").fadeIn("slow");
			closeTimePanel(val);
		})
</script>
</body>
</html>

