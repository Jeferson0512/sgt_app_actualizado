<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo company; ?> </title>

	<!-- Estilos que necesita la pagina -->
	<?php include "./vistas/inc/style.php" ?>

</head>

<body>
	<script>
		
		const BASE_URL = window.location.origin + '/sgt_app_actualizado/';
  		const urlFromBase = (path) => new URL(path, BASE_URL).href;
  	</script>
	<?php
	$peticionAjax = false;
	require_once "./controladores/vistaControlador.php";
	$IV = new vistaControlador();
	$vistas = $IV->fnObtenerVistaControllador();
	if ($vistas == "login" || $vistas == "404") {
		require_once "./vistas/contenidos/" . $vistas . "-view.php";
	} else {
	?>

		<!-- Main container -->
		<main class="full-box main-container">
			<!-- Nav lateral -->
			<?php include "./vistas/inc/navLateralSGT.view.php" ?>

			<!-- Page content -->
			<section class="full-box page-content">
				<!-- Barra de navegacion -->
				<?php
				include "./vistas/inc/navBar.view.php";

				include $vistas;
				?>
			</section>
		</main>
		<!-- Script para la pagina -->
	<?php
	}
	include "./vistas/inc/script.php"
	?>
</body>

</html>