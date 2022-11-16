<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro| Pets shop</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<style type="text/css">
			html{
				border: groove 10px;
				height: 650px;
			}
			body{
				background-image: url(Images/marco.webp);
			}
			.Login{
				border-radius: 50%;
				height: 80px;
				margin-top: 30px;
			}
			h1{
				font-family: arial;
				color: dark;
			}
			form{
				width: 350px;
				background-color: lightgray;
				border: solid darkgray;
				border-radius: 40px;
				margin-top: 30px;
				margin: 120px;
			}
			input{
				color: dark;
				background-color: lightgray;
				border-color: lightpink;
				width: 166px;
			} 
			button{
				background-color: lightgray;
				border-radius: 40px;
				width: 200px;
			}
			a{
				color: dimgray;
				background-color: lightgray;	
			}

</style>
</head>
<body>
	<center><form action="" method="post">
		<img src="Images/Logo.jpg" class="Login">
		<h1>Por favor registrese</h1>
		<br>
		<table>
			<tr>
				<td><img src="https://img.icons8.com/plumpy/24/null/minecraft-pug.png"/><input type="text" name="txtusuario" placeholder="Ingrese su usuario"><br><br>
			</tr>
			<tr>
				<td><img src="https://img.icons8.com/color/24/null/dog-collar.png"/><input type="password" name="txtClave" placeholder="Ingrese su contraseña"><br><br>
			</tr>
			<tr>
				<center><td><button><a href="<?php echo base_url(); ?>Cinicio">Ingresar</a></button></td></center>
			</tr>
		</table>
	</form>
	</form></center>
	

</body>
</html>