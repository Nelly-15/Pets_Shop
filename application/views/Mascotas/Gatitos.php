<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gatitos |Pats shop</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style type="text/css">

	body {
		background-image: url('Images/Love.jpg');
		margin: 10px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
.alert{
	text-align: center;
	color: black;
	text-transform: uppercase;
	background-color: white;
	border: groove 8px;
}
form{
	background-image: url(Images/cat.jpg);

}
table{
	background-image: linear-gradient(45deg, #ff9a9e 10%, #fad0c4 99%, #fad0c4 100%);
	border: groove 8px;
}
.img{
	height: 150px;
	border-radius: 50%;
	border: solid hotpink;
}
.card{
	height: 260px;
	width: 1000px;
}
.caption{
	text-align: center;
	color: black;
}
.top{
	border-radius: 20%;
	border: solid pink;
	height: 100px;
	width: 135px;
}
.navbar{
	color: lightpink;
	font-size: 20px;
}
span{
	background-color: lightpink;
	width: 985px;
	text-align: right;
}
.info{
	background-color: lightpink;
	color: darkviolet;
	height: 175px;
	width: 100px;
}
section{
	background-color: white;
	border: groove pink;
	height: 100px;
}
.shrink{
	width: 1000px;
}
*{
		padding: 0px;
		margin: 0px;
	}
	#header{
		margin: auto;
		width: 700px;
		font-family: sans-serif;
	}
	ul,ol{
		list-style: none;
	}
	.nav li a{
		background-color: black;
		color: pink;
		text-decoration: none;
		padding: 1px 5px;
		display: block;
	}
	.nav li a: hover{
		background-color: white;
	}
	.nav > li{
		float: left;
	}
	.nav li ul{
		display: none;
		position: absolute;
		min-width: 110px;
	}
	.nav li:hover >ul{
		display: block;
	}
	.nav li ul li{
		position: relative;
	}
	.nav li ul li ul{
		right: -120px;
		top: 0px;
	}
	.lOGO{
		border-radius: 40%;
	}
	</style>
</head>
<body>
	<div class="alert" role="alert">
  <h1>¡Adopa un gatito!</h1>

<form action="<?php echo base_url(); ?>Cperritos/guardar" method="post">
	<table>
		<tr>
			<td><label>Nombre</label></td>
			<td><input type="text" name="txtNombre"></td>
		</tr>
		<tr>
			<td><label>Raza</label></td>
			<td><input type="text" name="txtRaza"></td>
		</tr>
		<tr>
			<td><label>Tamaño</label></td>
			<td><input type="int" name="intTamaño"></td>
		</tr>
		<tr>
			<td><label>Color</label></td>
			<td><input type="text" name="txtColor"></td>
		</tr>
		<tr>
			<td><label>Edad</label></td>
			<td><input type="int" name="intEdad"></td>
		</tr>
		<tr>
			<td colspan="2"><label>adopcion</label></td>
		</tr>
		<tr>
			<td><label>Hora</label></td>
			<td><input type="time" name="timeHora"></td>
		</tr>
		<tr>
			<td><label>Fecha</label></td>
			<td><input type="date" name="dateFecha"></td>
			</tr>
		<tr>
			<td colspan="2"><input type="submit" value="Guardar"></td>
		</tr>
		<tr>
	</table></div>
</form>
<a href="<?php echo base_url(); ?>CLogin">Loguearse</a>
<section><img src="Images/2.jpg" class="top" align="left"><p>Mary<br>Raza:Balines<br>Tamaño:1.45cm<br>Color:blano<br>Edad:4años</p><</section><section><img src="Images/Chii.jpg" class="top" align="left"><p>Chino<br>Raza:Persa de pelo corto<br>Tamaño:80-90cm<br>Color:amarillo palido<br>Edad:3años</p><</section><section><img src="Images/descarga (1).jpg" class="top" align="left"><p>Milo<br>Raza:Fold escoces<br>Tamaño:1.20cm<br>Color:cafe palido<br>Edad:recien nacido</p><</section><section><img src="Images/GATITO.jpg" class="top" align="left"><p>copito<br>Raza:chinchilla<br>Tamaño:2.30cm<br>Color:blanco<br>Edad:4años</p></section><section><img src="Images/Nat.jpg" class="top" align="left"><p>Lila<br>Raza:birmana<br>Tamaño:1.60cm<br>Color:humo<br>Edad:2años</p></section><section><img src="Images/Twiiti.jpg" class="top" align="left">tali<br>Raza:Muchiki<br>Tamaño:2.30cm<br>Color:gris<br>Edad:1/2años</p></section>
<hr>
<main class="shrink">
  <div class="navbar navbar-dark bg-dark">
    <h1 class="mt-5"><img src="Images/Logo.jpg"></h1>
    <p class="navbar">En Pets shop estamos a sus ordenes, nada nos da mas gusto que ver a las familias adoptar a un nuevo integrante.
  </div>

<footer class="navbar navbar-dark bg-dark">
  <div class="navbar navbar-dark bg-dark">
    <span class="text-muted">Siguenos en nuestras redes sociales<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>&nbsp;&nbsp;&nbsp;
<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></a>&nbsp;&nbsp;&nbsp;<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a></span>
  </div>
</footer>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>