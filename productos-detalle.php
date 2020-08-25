				<?php
					include_once('partes/header.php')
					?>	
	
	<body>	
	
				        <!--cabecera o menus-->
					<?php
						include_once('partes/menus.php');
					
					if(isset($_POST['comentar'])){
					
					$data = $_POST;
					unset($data['comentar']);
					$fecha = new DateTime();
					$indexComentario = $fecha->format('YmdHisu');
					$data['fecha'] = date('d/m/Y H:i:s');
					
					//$data['fecha'] = $fecha->format('d/m/Y H:i:s');
					
					if(file_exists('datos/comentarios.json')){
						$comentarioJson = file_get_contents('datos/comentarios.json');
						$comentarioArray = json_decode($comentarioJson,true );
					}else{
						$comentarioArray = array();
					}
					$comentarioArray[$indexComentario] = $data;
					$fp = fopen('datos/comentarios.json','w');
					fwrite($fp,json_encode($comentarioArray));
					fclose($fp); 
				}

				?>
				
	<section id="nuevos-productos" class="new-arrivals">
		<div class="container">
		<div class="section-header">	
					</br>
                    </br>
                    </br>
					<h5>Productos</h5>                  
				</div>
				<div class="new-arrivals-content">
				<div class="row">
				<div class="col-md-4 col-sm-6">
					<?php
					include_once('partes/menu_costado.php');
					?>
						
							<div class="single-new-arrival single-new-arrival-bh">
								<!--<div class="single-new-arrival-bg"> este pone fondo blanco-->
								<div class="row-fluid">
								
                               <?php 
                                	$fp = fopen('datos/productos.json','r');
                                    $pArray = json_decode(fread($fp,filesize('datos/productos.json')),true);
                                    fclose($fp);
                                    foreach($pArray as $prod){ 
                                        if($prod['id'] == $_GET['prod']){
                                            break;
                                        }
                                    }
                                ?>
								<li class="col-md-12">
									<div class="thumbnail">
										
			
										<h3 style="color:black;"><?php echo $prod['nombre']?></h3>
										
								
									</li>	
									<li class="col-md-6 col-sm-6">
									<div class="thumbnail">
										
									<img src="images/productos/<?php echo $prod['imagen']?>" alt="new-arrivals images" width="253" height="253"></a>
									<!--div class="new-arrival-cart">
									<p style="color:black">
											<span class="lnr lnr-cart"></span>
											<a href="#">Añadir <span>al </span> carrito</a>
										</p>
										<p class="arrival-review pull-right">
											span class="lnr lnr-heart"></span-->
											<!--span class="lnr lnr-frame-expand"></span>
										</p>
											</div-->
											<button class="btn-cart welcome-add-cart coleccion-gamer-btn margen" name="comprar">Añadir al carrito</button>
											<form action="/action_page.php">
  												<label style="color:black;" for="quantity">Cantidad (máx 5)</label>
  												<input style="color:black;" type="number" id="quantity" name="quantity" min="1" max="5">
										</form>
									</li>	

											
                                    <li class="col-md-6 col-sm-6">
									<div class="thumbnail">
										
										<p style="color:black;"><strong> <?php echo $prod['precio']?></strong></p>
										<p style="color:black;">Stock: <?php echo $prod['cantidad']?></p>
										<p style="color:black;">Modelo: <?php echo $prod['modelo']?></p>
								
									</li>	
                                    <li class="col-md- col-sm-6">
									<div class="thumbnail">
										
										<p style="color:black;"><strong>Deja un Comentario</strong></p>
										</br>
										<form class="form-horizontal" action="" method="post">
											<fieldset>
											<div class="control-group">
												<input style="color:black;" type="text" placeholder="Ingrese su mail" class="input-xlarge formu" name="email">
											</div>
											<!--div class="control-group"-->
											<br>
											<p style="color:black;"><strong>Ingrese su comentario</strong></p>
											<div style="color:black;" class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Por favor, escriba su mensaje">
												<textarea rows="4" placeholder="Comentario" id="textarea" class="input-xlarge" name="descripcion"></textarea>
											</div>
											
											<div class="control-group">
											<p style="color:black;"><strong>Deja tu puntaje del producto</strong></p>
												<select class="form-control" name="rankeo">
													<option style="color:black;" value="1">*</option>
													<option style="color:black;" value="2">**</option>
													<option style="color:black;" value="3">***</option>
													<option style="color:black;" value="4">****</option>
													<option style="color:black;" value="5">*****</option>
												</select>
											</div>
											<input type="hidden"  class="input-xlarge" name="producto_id" value="<?php echo $_GET['prod']?>"/>

											<button class="btn-cart welcome-add-cart coleccion-gamer-btn margen" type="submit" name="comentar">Comentar</button>

											</fieldset>
										</form>
									</li>	
									<h4><u>Comentarios del producto<u></h4>
									<br>
									<?php
										if(file_exists('datos/comentarios.json')){
											$comentarioJson = file_get_contents('datos/comentarios.json');
											$comentarioArray = json_decode($comentarioJson,true );
											krsort($comentarioArray);
											$cantidad = 0;
											foreach($comentarioArray as $comentario){
												if($comentario['producto_id'] == $_GET['prod']){ 
													$cantidad++;
													if($cantidad == 11) break;
													?>
													<h5>
														<?php echo $comentario['email'].'('.$comentario['fecha'].'):'.$comentario['descripcion']; ?>
													</h5>
											<?php }
											}
										}
									?> 
                    
								
						</div>
							</div>
								</div>
									</div>
										</div>
						
				</div>
				</div>
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