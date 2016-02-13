<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>H&T CORPORACION INGENIERIA</title>
	{!!Html::style('css/bootstrap.min.css')!!}
	{!!Html::style('css/font-awesome.min.css')!!}
	{!!Html::style('css/layout.css')!!}
	{!!Html::style('css/forms.css')!!}
	{!!Html::script('js/jquery.js')!!}

</head>
<body>
	<section class="container-layout">
		<nav class="navigation">
			<div class="user">
				<div class="photo"></div>
				<div class="name"><p>HUGO PANEZ CHAVEZ </p></div>
				<div class="menu-user"><i class="fa fa-bars"></i></div>
				<div class="sesion">
					<i class="fa fa-sort-up skin"></i>
					<article class="sesion-works">
						<div class="task">
							<i class="fa fa-pencil-square"></i>
							<p>Logis.</p>
						</div>
						<div class="task">
							<i class="fa fa-suitcase"></i>
							<p>Admin.</p>
						</div>
						<div class="task">
							<i class="fa fa-money"></i>
							<p>Conta.</p>
						</div>
						<div class="task">
							<i class="fa fa-plus-square"></i>
							<p>S. gest</p>
						</div>
						<div class="task">
							<i class="fa fa-group"></i>
							<p>Prod.</p>
						</div>
					</article>
					<a class="logout">Cerrar sesion<i class="fa fa-sign-out"></i></a>
				</div>
			</div>
			<div class="calendary">
				
				
			</div>
			<div class="cont-menu">
				<button class="module mo-ad">ADMINISTRACION</button>
					<div class="administration content-menu">
					</div>
				<button class="module mo-lo">LOGISTICA</button>
					<div class="logistic content-menu">
						<button class="almacen sub-menu">ALMACEN</button>
						<button class="compras sub-menu">COMPRA</button>
						<button class="solicitud sub-menu">SOLICITUD</button>
						<button class="inventario sub-menu">INVENTARIO</button>
						<button class="movimiento sub-menu">MOVIMIENTO</button>
					</div>
				<button class="module mo-co">CONTABILIDAD</button>
					<div class="contability content-menu">
						
					</div>
				<button class="module mo-ss">SSO Y SGI</button>
					<div class="ssoysgi content-menu">
						
					</div>
				<button class="module mo-pr">PRODUCCION</button>
					<div class="production content-menu">
						
					</div>
			</div>
		</nav>
		<section class="container-module">
			<header class="cont-head">
				
				<h4>H&T CORPORACION INGENIEROS</h4>
			</header>
			<section class="views">
				@yield('content')
					
			</section>
		</section>
	</section>
</body>
</html>
<script>
	$('.mo-ad').on('click', function(){
		$('.administration').slideToggle();
		$('.logistic, .contability, .ssoysgi, .production').slideUp();
	});
	$('.mo-lo').on('click', function(){
		$('.logistic').slideToggle();
		$('.administration, .contability, .ssoysgi, .production').slideUp();
	});
	$('.mo-co').on('click', function(){
		$('.contability').slideToggle();
		$('.administration, .logistic, .ssoysgi, .production').slideUp();
	});
	$('.mo-ss').on('click', function(){
		$('.ssoysgi').slideToggle();
		$('.logistic, .contability, .administration, .production').slideUp();
	});
	$('.mo-pr').on('click', function(){
		$('.production').slideToggle();
		$('.logistic, .contability, .ssoysgi, .administration').slideUp();
	});

    $(".fa-bars").mouseover( function(){
        $(".sesion").css('display','block').fadeIn(1000);

    });
    $('body').on('click', function(){
        $('.sesion').fadeOut();
    });
    $(".fa-times").mouseover( function(){
        $(".cabecera").css('background','#900F0F');

    });
    $(".fa-times").mouseout( function(){
        $(".cabecera").css('background','#167159');

    });

</script>