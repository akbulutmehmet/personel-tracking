<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
</head>
<body>
<div class="container register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
			<h3>Welcome</h3>
			<p>You can add a personel with this page!</p>
		</div>
		<div class="col-md-9 register-right">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<h3 class="register-heading">Personel ADD</h3>
					<div class="row register-form">
						<div class="col-md-6">
							<form action="/personel/add/" method="post">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name *" value="" required/>
							</div>
							<div class="form-group">
								<input type="text" name="surname" class="form-control" placeholder="SurName *" value="" required/>
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email*" value="" required/>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="wage" placeholder="Wage *" value="" required/>
							</div>

						</div>
						<div class="col-md-6">

							<div class="form-group">
								<select class="form-control" name="isActive" required>
									<option class="hidden"  selected disabled>isActive</option>
									<option value="1">Active</option>
									<option value="0">Passive</option>
								</select>
							</div>

							<input type="submit" class="btnRegister"  value="Register"/>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>

</div>
</body>
</html>
