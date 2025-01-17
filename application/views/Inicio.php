<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina Principal |Pets shop</title>
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
		text-decoration: none;
		font-size: 20px;
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
		background-color: white;
		color: hotpink;
		font-size: 20px;
		border: silver double 5px;
	}

	.footer {
		text-align: right;
		font-size: 22px;
		background-color: black;
		text-transform: uppercase;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	.btn{
		color: black;
		background-color: white;
		border-radius: 30%;
		height: 29px;
		border: double lightpink;
	}
	.block{
		height: 400px;
		width: 1000px;
	}
	.Icon{
		height: 14px;
	}
	.thumbnail{
		height: 50px;
	}
	section{
		background-color: lightpink;
		border: double hotpink 4px ;
	}
	label{
		background-color: lightpink;
		border-radius: 20%;
		border: solid;
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
<a href="<?php echo base_url(); ?>Welcome"><img src="Images/Logo.jpg" class="lOGO"></a>
<div id="header">
	<ul class="nav">
		<li><a href="<?php echo base_url(); ?>Cinicio">Inicio</a></li>
		<li><a href="<?php echo base_url(); ?>Chistoria">¿Quienes somos?</a></li>
		<li><a href="<?php echo base_url(); ?>Cmascotas">Mascotas</a>
			<ul>
				<li><a href="<?php echo base_url(); ?>Cperritos">Perritos</a></li>
				<li><a href="<?php echo base_url(); ?>Cgatitos">Gatitos</a></li>
			</ul></li>
			<li><a href="<?php echo base_url(); ?>Ccontacto">Contacto</a></li>
	</ul>
</div>

<body><label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>68833180/<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg>8262634002</label>&nbsp;&nbsp;<label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg>col. Los cerezos #555</label>&nbsp;&nbsp;<label><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
  <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.314l6.709 3.932L8 8.928l1.291.718L16 5.714V5.4a2 2 0 0 0-1.059-1.765l-6-3.2ZM16 6.873l-5.693 3.337L16 13.372v-6.5Zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516ZM0 13.373l5.693-3.163L0 6.873v6.5Z"/>
</svg>PetsShop@gmail.com</label>
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Cartoon.png" class="block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/GATITO.jpg" class="block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/fox.jpg" class="block" alt="...">
    </div>
    <div class="carousel-item">
      <img src="Images/Cartoonize.png" class="block" alt="...">
    </div>
  </div>
</div>
<section>
<img src="Images/Logo.jpg" class="thumbnail" alt="..." align="left"><p>En esta pagina usted encontrara la mascota ideal para compartir momentos innolvidables con su familia llenos de alegria y diversion que puede brindarles la compañia de una mascota</p>
<img src="Images/dog.png" class="thumbnail" alt="..." align="left"><p>Aqui encontrara una gran varidad de mascotas disponibles para ser adoptadas y asi llenar de alegria su hogar y compartir momentos llenos de diversion</p>
<img src="Images/shop.png" class="thumbnail" alt="..." align="left"><p>Aqui encontrara una gran varidad de mascotas disponibles para ser adoptadas y asi llenar de alegria su hogar y compartir momentos llenos de diversion</p>
<img src="Images/call.svg" height="35"alt="..." align="left"><p>Estamos a sus ordenes para atender sus dudas con la atencion que usted se merece</p>
</section>
<footer>
	<footer class="footer">
  <div class="container">
    <span class="text-muted">
	<img src="Images/Logo.jpg" height="30">Pets Shop, SA de CV&copy; 2017–2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>&nbsp;&nbsp;&nbsp;
<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></a>&nbsp;&nbsp;&nbsp;<a href=""><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="coral" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a></span>
  </div>
</footer>
</body>
</html>