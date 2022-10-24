<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Pets shop</title>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
	body {
		background-image: url('Images/Love.jpg');
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
	a {
		color: white;
		background-color: black;
		font-weight: bold;
		font-size: 20px;
		border: double hotpink;
	}
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	p {
		margin: 0 0 10px;
		padding:0;
	}
	p.footer {
		text-align: center;
		font-size: 22px;
		color: blackviolet;
		background-color: white;
		text-transform: uppercase;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	.Pagina{
		background-color: white;
		height: 15px;
		width: 15px;
	}
	.block{
		height: 400px;
		width: 920px;
	}
	.btn{
		color: black;
		background-color: white;
		border-radius: 30%;
		height: 29px;
		border: double lightpink;
	}
	.Icon{
		height: 14px;
	}
	input{
		color: dimgray;
		border-radius: 50%;
	}
	</style>
</head>
<nav class="navbar navbar-dark bg-dark">
	<img src="Images/Logo.jpg">
<a href=""><button type="button" class="btn">Inicio</button></a>
<a href=""><button type="button" class="btn">¿Quienes somos?</button></a>
<div class="dropdown">
  <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Mascotas
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#"><img src="Images/dog.png" class="Icon">Perritos</a></li>
    <li><a class="dropdown-item" href="#"><img src="Images/GATITO.jpg" class="Icon">Gatitos</a></li>
    <li><a class="dropdown-item" href="#"><img src="Images/fox.jpg" class="Icon">Zorros</a></li>
  </ul>
  <a href=""><button type="button" class="btn">Visitanos</button></a>
  <a href=""><button type="button" class="btn">Contactanos</button></a>
</nav>
<body>
      <img src="Images/GATITO.jpg" class="block" alt="...">
	<p class="footer">Al realizar el recorrido por "Pets shop" usted encontrara la mejor mascota para compartir su ida.
	!Estas mascotas estan esperandolos para conseguir un hogar, no los avandones¡</p>
	<center><a href=""><input type="button" value="Ingresar"></a></center>

</body>
</html>
