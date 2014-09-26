<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=width-device, minimun-scale=1, maximun-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
	<title>Portafolio.la</title>
	<link rel="stylesheet" href="static/css/normalize.css">
	<link rel="stylesheet" href="static/css/estilos.css">
</head>
<body>
	<header id="yo" class="Header"> 
		<nav class="MainMenu">
			<ul "MainMenu-list">
				<li class="MainMenu-item">
					<a href="#yo" class="MainMenu-link">Yo</a>
				</li>
				<li class="MainMenu-item">
					<a href="#perfil" class="MainMenu-link">Perfil</a>
				</li>
				<li class="MainMenu-item">
					<a href="#trabajo" class="MainMenu-link">Trabajo</a>
				</li>
				<li class="MainMenu-item">
					<a href="#contacto" class="MainMenu-link">Contacto</a>
				</li>
			</ul>
		</nav>
		<figure class="Header-imageContainer" >
			<img src="static/img/avatar.jpg" alt="Imagen Personal" class="Header-image" />
		</figure>
		<figcaption class = "Header-description">
			<a href="http://twitter.com/alex_chip42" target = "_black" class="Header-link" >@alex_chip42</a>
			<p class="Header-name" >Alexander Chip</p>
		</figcaption>
	</header>
	<section id="perfil" class = "Profile" >
		<h2 class = "Profile-title u-title">Mi Pérfil</h2>
		<p class = "Profile-description">
			Hola!! Si llegaste hasta aqui puedes ver mi portafolio y contactarme
		</p>
		<a class="Profile-link icon-twitter" href="Http://twitter.com/alex_chip42" target = "_black">/alex_chip42</a>
		<a class="Profile-link icon-facebook" href="https://www.facebook.com/alex.chip2" target = "_black">/alex.chip2</a>
		<a class="Profile-link icon-github" href="https://github.com/alex-chip "  target = "_black">/alex-chip</a>
	</section>
	<section id ="trabajo" class = "Work">
		<h2 class = "Work-title u-title">Mi Trabajo</h2>
		<article class = "Work-item">
			<figure class ="Work-imageContainer">
				<img src="static/img/proyecto.jpg" alt="Es la descripcion de mi imagen" class ="Work-images" />
				<figcaption class = "Work-description">Website de Mejorando.la</figcaption>
			</figure>
		</article>
		<article class = "Work-item">
			<figure class ="Work-imageContainer">
				<img src="static/img/proyecto.jpg" alt="Es la descripcion de mi imagen" class ="Work-images" />
				<figcaption class = "Work-description">Website de Mejorando.la</figcaption>
			</figure>
		</article>
		<article class = "Work-item">
			<figure class ="Work-imageContainer">
				<img src="static/img/proyecto.jpg" alt="Es la descripcion de mi imagen" class ="Work-images" />
				<figcaption class = "Work-description">Website de Mejorando.la</figcaption>
			</figure>
		</article>
		<article class = "Work-item">
			<figure class ="Work-imageContainer">
				<img src="static/img/proyecto.jpg" alt="Es la descripcion de mi imagen" class ="Work-images" />
				<figcaption class = "Work-description">Website de Mejorando.la</figcaption>
			</figure>
		</article>
		<article class = "Work-item">
			<figure class ="Work-imageContainer">
				<img src="static/img/proyecto.jpg" alt="Es la descripcion de mi imagen" class ="Work-images" />
				<figcaption class = "Work-description">Website de Mejorando.la</figcaption>
			</figure>
		</article>
		<article class = "Work-item">
			<figure class ="Work-imageContainer">
				<img src="static/img/proyecto.jpg" alt="Es la descripcion de mi imagen" class ="Work-images" />
				<figcaption class = "Work-description">Website de Mejorando.la</figcaption>
			</figure>
		</article>
	</section>
	<footer id = "contacto" class = "Footer">
		<div class="Footer-left ">
			<h3 class = "Footer-title">Contacto</h3> 
			<p class = "Footer-description" >Si Tienes una sugerencia o quieres trabajar conmigo ponte en contacto con este formulario</p>
		</div>
		<form class = "Footer-form">
			<input class = "Footer-formInput" type="text" placeholder ="Nombre" />
			<input class = "Footer-formInput" type="email" placeholder="Email" />
			<textarea class = "Footer-textarea" placeholder="Motivo"></textarea>
			<button type="submit" class = "Footer-button" >Contactarme</button>
		</form>
	</footer>
</body>
</html>