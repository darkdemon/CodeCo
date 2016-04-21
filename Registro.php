<?php
/*Aqui capturo los datos del registro. posteriormente iran directo a la base de datos */
$nombre = $_POST['fname'];
$apellido = $_POST['lname'];
$correo = $_POST['email'];
$f_nacimiento =$_POST['bday'];
$genero =$_POST['gender'];
			
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagína web</title>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="styles/estilo.css" />
</head>
<body>
    <?php include 'includes/header_login.php'?>
	 
		
     <?php echo  '<br>', '<br>', '<br>','<h1>Felicitaciones!</h1>', 'el registro se hizo correctamente para :', '<br>', $nombre.' ', $apellido,'<br>' ,$correo, '<br>' ;?>



    <!--Aqui va el pie de pagina  -->
    <?php include 'includes/footer.php'?>
	<a href="index.php"><input type="submit" value="Volver" ></a>

</body>
</html>