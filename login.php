<!DOCTYPE html>
<html>
<head>
	<title>Pagína web</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/estilo.css" />
</head>
<body>
       <?php include 'includes/header_login.php'?>
		

    <section id="sugerencias_seccion_login">
	<h2>Abre una cuenta<h2>
		<h4>Es gratis y lo será siempre<h4>
      <form action="action_page.php" method="get">
	Nombre: <br><input type="text" name="fname"><br>
	Apellido: <br><input type="text" name="lname"><br>
	Correo: <br><input type="email" name="lname"><br>
	Fecha de nacimiento:<br><input type="date" name="bday" max="1979-12-31"><br>
	Sexo:<br><input type="radio" name="gender" value="male" checked> Hombre
	<input type="radio" name="gender" value="female"> Mujer
	<input type="radio" name="gender" value="other"> Otro
  

  
  
  <br><br><input type="submit" value="Abrir una cuenta">
  
  

  </form>
    </section>

    

    <!--Aqui va el pie de pagina  -->
    <?php include 'includes/footer.php'?>


</body>
</html>