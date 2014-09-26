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

    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

    <script>
    	$(document).ready(function() {
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
    </script>

</head>



<body>

	<div class="container">

		<br>

		<div class="row clearfix">

			<div class="col-md-12 column">

				<div class="panel panel-primary">

					<div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Your contact details</div>

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

	</div>



</body>

</html>

