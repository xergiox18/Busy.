<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Enviar ubicación del dispositivo a PHP">
	<meta name="author" content="Parzibyte">
	<title>Enviar ubicación del dispositivo a PHP</title>
	<!-- Cargar el CSS de Boostrap-->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
	<!-- Cargar estilos propios -->
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<!-- Termina la definición del menú -->
	<main role="main" class="container">
		<div class="row">
			<!-- Aquí pon las col-x necesarias, comienza tu contenido, etcétera -->
			<div class="col-12">
				<h1>Enviar ubicación del dispositivo a PHP</h1>
				<br>
				<button id="btnIniciar" class="btn btn-info">Iniciar</button>
				<button id="btnDetener" class="btn btn-danger">Detener</button>
				<br>
				<strong>Latitud: </strong> <span id="latitud"></span>
				<strong>Longitud: </strong> <span id="longitud"></span>
				<br>
				<a href="./ubicaciones.txt">Ver ubicaciones</a>
				<br>
				<pre id="log"></pre>
			</div>
		</div>
	</main>
	<script src="script.js">
	</script>
</body>

</html>