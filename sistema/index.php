<!DOCTYPE html>
<html>
<?php include '../php/header.php'; ?>
<body class="bgSystem">
	<header>
		<nav class="topNav">
			<ul id="slide-out" class="side-nav fixed cNav">
				<li>
					<div class="userView">
						<div class="background">
							<img class="logo" src="../img/paw2.svg">
						</div>
						<a href="#!img"><img class="circle" src="../img/sofia.jpeg"></a>
						<span class="txtShadow name ">Bienvenido(a),</span>
						<span class="txtShadow email ">Sofia</span>
					</div>
				</li>
				<li><a class="subheader">Sistema</a></li>
				<li>
					<ul class="collapsible" data-collapsible="accordion">
						<li class="bold">
							<div class="collapsible-header waves-effect waves-orange">
								Consultar
							</div>
							<div class="collapsible-body">
								<ul class="bgMenu">
									<li>
										<a href="#">Propietario</a>
									</li>
									<li>
										<a href="#">Mascota</a>
									</li>
									<li>
										<a href="#">Estética</a>
									</li>
									<li>
										<a href="#">Consultas</a>
									</li>
									<li>
										<a href="#">Pensión</a>
									</li>
									<li>
										<a href="#">Vacuna</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<div class="collapsible-header waves-effect waves-orange">
								Registrar 
							</div>
							<div class="collapsible-body">
								<ul class="bgMenu">
									<li>
										<a href="#">Propietario</a>
									</li>
									<li>
										<a href="#">Mascota</a>
									</li>
									<li>
										<a href="#">Estética</a>
									</li>
									<li>
										<a href="#">Consultas</a>
									</li>
									<li>
										<a href="#">Pensión</a>
									</li>
									<li>
										<a href="#">Vacuna</a>
									</li>
								</ul>
							</div>
						</li>
						<li><div class="divider"></div></li>
						<li><a class="subheader">Usuario</a></li>
						<li>
							<div class="collapsible-header waves-effect waves-orange">
								Opciones
							</div>
							<div class="collapsible-body">
								<ul class="bgMenu">
									<li>
										<a href="#">Cambiar PIN</a>
									</li>
									<li>
										<a href="#">Cerrar sesión</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</li>
			</ul>
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
		</nav>
	</header>
	<main>	
		<div class="contFrame">
			<iframe src="../iframe/prop.php" frameborder="0"></iframe>
		</div>
	</main>
	<footer class="bgMenu">
		<div class="footer-copyright">
			<div class="container">
				© 2014 Copyright Magic Pets
				<a class="grey-text text-lighten-4 right" href="https://www.facebook.com/german.martinezfragoso">Site made by  Germán Martínez Fragoso</a>
			</div>
		</div>
	</footer>
</body>
<?php include '../php/footer.php'; ?>
<script>
	$('.button-collapse').sideNav();
	// alert('Height: '+$(window).height()+'\nWidth: '+$(window).width());
	// var $iframes = $("iframe");
	// $iframes.each(function(){
	// 	$(this).data("ratio",this.height/this.width).removeAttr("width").removeAttr("height");
	// });
	// $(window).resize(function(){
	// 	$iframes.each(function(){
	// 		var width = $(this).parent().width();
	// 		var height = $(this).parent().height();
	// 		$(this).width(width).height(width * $(this).data("ratio"));
	// 	});
	// }).resize();
</script>
</html>