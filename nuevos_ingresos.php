<?php
					include_once('partes/header.php')
					?>	
	
	<body>	
	
				        <!--cabecera o menus-->
					<?php
						include_once('partes/menus.php')
					?>
					<?php
                include_once('partes/home.php');
							?>		
	<section id="nuevos-productos" class="new-arrivals">
		<div class="container">
		<div class="section-header">	
					</br>
					<h2>Productos</h2>
				</div>

				<!--<div class="col-md-12 col-sm-12">-->
				<div class="new-arrivals-content">
				<div class="row"><!---fluid-->
						<div class="col-md-12 col-sm-6">
					
						
							<div class="single-new-arrival single-new-arrival-bh">
								<!--<div class="single-new-arrival-bg"> este pone fondo blanco-->
								<div class="row-fluid">
								<ul class="thumbnail">
										<?php
											$fp = fopen('datos/productos.json','r');
											$pArray = json_decode(fread($fp,filesize('datos/productos.json')),true);
											fclose($fp);
											foreach($pArray as $prod){ 
												$flagPrint = true;
												if(!empty($_GET['nuevos'])  AND $flagPrint ){
													if($_GET['nuevos'] == $prod['nuevos']){
														$flagPrint = true;
													}else{
														$flagPrint = false;
													}
												}
												if($flagPrint){
										?>
								
									<li class="col-md-3 col-sm-3">
									<div class="thumbnail">
									 <div class="single-new-arrival">
									   <div class="single-new-arribal-bg">
												
								<a href="productos-detalle.php?prod=<?php echo $prod['id']?>"><img src="images/productos/<?php echo $prod['imagen']?>" alt="new-arrivals images"></a>	
										
										<p><?php echo $prod['nombre']?></p>
										<p><strong> <?php echo $prod['precio']?></strong></p>
										<p>Stock: <?php echo $prod['cantidad']?></p>
										<p>Modelo: <?php echo $prod['modelo']?></p>
												
										
					
											<div class="new-arrival-cart">
										<p>
											<span class="lnr lnr-cart"></span>
											<a href="#">Añadir <span>al </span> carrito</a>
										</p>
										<p class="arrival-review pull-right">
											<span class="lnr lnr-heart"></span>
											<span class="lnr lnr-frame-expand"></span>
										</p>
											</div>
										</div>
										</div>
										</div>
									</li>	

								

							<!--de aca saque el array de productos -->
							<!--el php de abajo es para cerrar el foreach de arriba -->
										<?php }
									}?>
										</ul>
								<!--</div>-->
					
							</div>	
					
						</div>

						</div>
			
				</div>
				</div>
			</div>
			<div class="col text-center">
                     <h2>Mira todos nuestros productos hace click abajo</h2>
                      <a href="productos.php" class="btn-cart welcome-add-cart coleccion-gamer-btn margen">Productos</a>
                    </div>
		</section>


         <!-- carrusel de marcas -->
		<?php
		include_once('partes/carruselmarcas.php')
		?>

		<!--menu de abajo-->
		<?php
		include_once('partes/menupie.php')
		?>

		<!--footer-->

        <?php
             include_once('partes/footer.php')
		?>
        
	
	
		
		<script src="assets/js/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
	
</html>