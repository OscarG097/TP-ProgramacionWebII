<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">      
        <title>GLOB - Contacto</title>
		<link rel="shortcut icon" type="image/icon" href="images/logo/logo-glob-grande.png"/>  
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/linearicons.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">	
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootsnav.css" >	
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<link rel="shortcut icon" type="image/icon" href="images/logo/logo-glob-grande.png"/> 
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assetsfonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="assets/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="assets/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="assets/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="assets/noui/nouislider.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
 
</head>


<body>

					<?php
					include_once('partes/menus.php')
					?>

<div class="container">         			            
				           <!--  Start Header Navigation -->
				            <div class="navbar-header">
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
				                    <i class="fa fa-bars"></i>
				                </button>
								<a href="index.php"><img src="images/logo/logo-glob-grande.png"/></a><a class="navbar-brand"></a>
							</div>

			
							
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="" method="GET">
				<span class="contact100-form-title">
					Contactanos
				</span>

				<?php
					if( !empty($_GET["name"]) && !empty($_GET["email"]) )
					{
						echo "<h2>Gracias, ". $_GET['name']. "<br/>";
						echo "Su mensaje sera respondido a ". $_GET['email']. " lo mas pronto posible</h2>";
					}else{
						echo "<h2>Complete los elementos del formulario...</h2><br/>";
					}
				?>
			
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Nombre Completo *</span>
					<input class="input100" type="text" name="name" placeholder="Ingrese nombre" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Por favor, ingrese email">
					<span class="label-input100">Email *</span>
					<input class="input100" type="email" name="email" placeholder="Ingrese su email" required>
				</div>


				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Teléfono</span>
					<input class="input100" type="text" name="phone" placeholder="Ingrese numero de teléfono">
				</div>		

				<div class="noexiste">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">¿Para que equipo es su consulta?</span>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio1" type="radio" name="tipo-equipo" value="Gamer" required>
							<label class="label-radio100" for="radio1">
								PC Gamer
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="tipo-equipo" value="Diseñador" required>
							<label class="label-radio100" for="radio2">
								PC Diseñador
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="tipo-equipo" value="Base" required>
							<label class="label-radio100" for="radio3">
								PC Trabajo Básico
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio4" type="radio" name="tipo-equipo" value="Otro" required>
							<label class="label-radio100" for="radio4">
								Otro
							</label>
						</div>
					</div>
				</div>
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Por favor, escriba su mensaje">
					<span class="label-input100">Mensaje</span>
					<textarea class="input100" name="message" placeholder="Escriba su mensaje" required></textarea>
				</div>
		
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						<span>
							Enviar!
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
				</br>

		<!--menu de abajo-->
		<?php
		include_once('partes/menupie.php')
		?>

		<!--footer-->

        <?php
             include_once('partes/footer.php')
		?>


	<script src="asset/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="asset/vendor/animsition/js/animsition.min.js"></script>
	<script src="asset/vendor/bootstrap/js/popper.js"></script>
	<script src="asset/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="asset/vendor/select2/select2.min.js"></script>
	<script src="asset/js/main.js"></script>
	<script src="assets/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/custom.js"></script>

	</body>

</html>
