<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>NEVADO BIT</title>
	<link rel="icon" type="image/jpg" href="IMAGENES1/IMAGEN0.jpg">



	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="main.css">
     <link href="<link href="https://fonts.googleapis.com/css?family="Vidaloka&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body>
	<nav>
       <ul>

       	        <li><a href="index.html">Home</a></li>
        		<li><a href="Products.html">Products</a></li>
        		<li><a href="Contact.html">Contact</a></li>
        		<li><a href="About Us.html">About Us</a></li>


            </ul> 	
	</nav> 

	<h1>CONTACT</h1>
	  <center>
	  	<?php 
$myemail = 'michaelcapera@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['menssage'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "The message has been sent successfully";
?>



        <form method="post" action="Send.php">
	       	<input type="text" name="nombre" placeholder="NAME">
	       	<input type="email" name="email" placeholder="E-MAIL">
	       	<br>
	       	<textarea type="text" name="mesage" placeholder="MESAGE"></textarea>
	       	<br>
	       	<br>
	       	<input type="submit" name="Send" value="SEND">	
	      </form>

	
		
	



	
		<footer>
			<div class="copy">
				
				<p>&copy;Nevado Bit</p>

				<div class="redes">
					<a href="index.html" target="blank">Home</a>
					<a href="Products.html" target="blank">Products</a>
					<a href="Contact.html" target="blank">Contact</a>
					<a href="About Us.html" target="blank">About Us</a>



				
			</div>
			
		</footer>
			
		
</body>
</html>

		

