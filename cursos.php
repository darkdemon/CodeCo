<!DOCTYPE html>
<html>
<head>
	<title>ediciones</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/estilo.css" />
</head>
<body>
    <!--Aqui va la cabezera  -->
    <?php include 'includes/header.php'?>
<aside>

<h2>Temas</h2>     
	
		<li><a href="#">|Tema 1|</a></li>
		<li><a href="#">|Tema 2|</a></li>
		<li><a href="#">|Tema 3|</a></li>
		<li><a href="#">|Tema 4|</a></li>
		<li><a href="#">|Tema 5|</a></li>
</aside>		

    <section id="publicaciones_seccion_cursos">
        <table> 
		<tr> 
		<td>

		<div class="contenedor">
   
					<div class="Publicante_y_editar">
							<div class="publicante">
								 <div class="foto">
								 	<h1>Foto</h1>
									</div>
									<label>Publicante</label>
								 <input type="button" name="editar" value="Editar">
							</div>
					</div>

					
				
				<div class="Publicante_y_editar">
						<div class="publicante">
							 <div class="foto">
								<h1>Foto</h1>
								</div>
								<label>Publicante</label>
							 <input type="button" name="editar" value="Editar">
						</div>
				</div>

			
			<div class="Publicante_y_editar">
					<div class="publicante">
						 <div class="foto">
							<h1>Foto</h1>
							</div>
							<label>Publicante</label>
						 <input type="button" name="editar" value="Editar">
					</div>
			</div>

			
        </div>
		</td> 
		</tr> 
		</table> 
       
    </section>

    <!--Aqui va el pie de pagina  -->
    <?php include 'includes/footer.php'?>


</body>
</html>