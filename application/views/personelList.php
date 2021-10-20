
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Personel List</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css">
</head>
<body >
<div class="container-fluid register">
	<div class="row">
		<div class="col-md-3 register-left">
			<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
			<h3>Welcome</h3>
			<p>You can list a personel with this page!</p>
		</div>
		<div class="col-md-9 register-right " >
			<div class="row">
				<div class="col-md-12">
					<h3 class="display-4 text-center" >Personel List</h3>
					<a href="/personel/addPersonel">
						<button class="custom-button">Add Personel</button>
					</a>

				</div>
			</div>
			<div class="row">
			<div class="col-md-10 m-auto" >
				<table class="table table-striped table-dark ml-5 mr-5" style="margin-top: 5rem!important;box-sizing: border-box;">
					<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">Surname</th>
						<th scope="col">E-mail</th>
						<th scope="col">Wage</th>
						<th scope="col">isActive</th>
						<th scope="col">Process</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($personel as $per)  { ?>
					<tr>
						<th scope="row"><?php echo $per->id;?></th>
						<td><?php echo $per->name;?></td>
						<td><?php echo $per->surname;?></td>
						<td><?php echo $per->email;?></td>
						<td><?php echo $per->wage;?></td>
						<td><?php echo $per->isActive;?></td>
						<td>
							<a href="/personel/delete/<?php echo $per->id;?>">Delete</a>
							<a href="/personel/updatePersonel/<?php echo $per->id;?>">Update</a>
						</td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			</div>
		</div>
					</div>
				</div>
</div>
</body>
</html>
