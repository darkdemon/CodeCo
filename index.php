
<!DOCTYPE html>
<html>
<head>
	<title>Pagína web</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/estilo.css" />
</head>
<body>
       <?php include 'includes/header_login.php'?>


    <section id="sugerencias_seccion_logi">

			<h2>Abre una cuenta<h2>
			<h4>Es gratis y siempre lo sera <h4>
    <script type="text/javascript">

	function comprobarClave() {
		var x = document.forms["formulario"]["pass1"].value;
		var y = document.forms["formulario"]["pass2"].value;
		if (x == null || x == "" || x!=y) {
				alert("Error: las contraseñas deben ser iguales");
				return false;
		}
}
    </script>



      <form  name ="formulario"  method="POST" action="registro.php" onSubmit="return comprobarClave()">
        Nombre: <br><input type="text" name="fname" required ><br>
        Apellido: <br><input type="text" name="lname" required><br>
        Correo: <br><input type="email" name="email" required><br>
        contraseña: <br><input type="password" name="pass1" required><br>
        confirmar contraseña: <br><input type="password" name="pass2" required><br>
        Fecha de nacimiento:<br><input type="date" name="bday" max="2010-12-31" required><br>
        Sexo:<br><input type="radio" name="gender" value="male" checked > Hombre
        <input type="radio" name="gender" value="female"> Mujer
        <input type="radio" name="gender" value="other"> Otro

        <br><br><input type="submit" value="Abrir una cuenta" >

      </form>
    </section>



    <!--Aqui va el pie de pagina  -->
    <?php include 'includes/footer.php'?>


</body>
</html>
