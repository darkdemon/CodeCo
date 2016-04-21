<!DOCTYPE html>
<html>
<head>
	<title>ediciones</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/estilo.css" />
	<script type="text/javascript" src="js/comentarios.js"></script>
</head>
<body>
    <!--Aqui va la cabezera  -->
    <?php include 'includes/header.php'?>

    <section id="sugerencias_seccion">
        <div class="contenedor">
        		<div class="codigo_y_botones">
							<div class="publicacion_codigo">

								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

							</div>

					</div>

    </section>

    <section id="publicaciones_editar">
        <div class="contenedor">
        	<textarea id="edicion">
					</textarea>
				</div>

	  </section>
	  <section id="sugerencias_seccion_boton">
			<form action="ediciones.php" method="get">
			<input type="submit" value="Guardar">
			</form>
			
			<button onclick=" comentarios()">Agregar comentarios</button>
	  </section>




    <!--Aqui va el pie de pagina  -->
    <?php include 'includes/footer.php'?>


</body>
</html>
