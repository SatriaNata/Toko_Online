<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Integrasi Bootstap Dengan CodeIgniter 3</title>
     <!-- Bootstrap -->
     <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
     <script src="<?php echo base_url()?>assets/css/bootstrap.min.js" type="text/javascript"></script>
	<title>Login</title>
</head>
<body>
     <center>
	<h1>Masukan Username dan Password</h1>
	<form action="<?php echo base_url('C_Login/aksi_login'); ?>" method="post">		
		<table>
			<tr>
				<td class="py-2">Username</td>
				<td class="py-2"><input class="form-control" type="text" name="username"></td>
			</tr>
			<tr>
				<td class="py-2">Password</td>
				<td class="py-2"><input class="form-control" type="password" name="password"></td>
			</tr>
			<tr>
				<td class="py-2"></td>
				<td class="py-2"><input class="btn btn-primary" type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
     </center>
</body>
</html>