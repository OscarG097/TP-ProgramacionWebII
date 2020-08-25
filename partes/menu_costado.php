<div id="sidebar" class="span3">
<div class="well well-small">
			
	<!-- categorias -->	
				<div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menucostado"><h4><u>Categor&iacute;as</u></h4>
	                </button>

	        	</div>
					<div class="collapse navbar-collapse menu-ui-design" id="menucostado">


					<ul class="nav nav-list navbar.color" data-in="fadeInDown" data-out="FadeOutUp">
					<h4><u>Categor&iacute;as</u></h4>
		<?php
			$fp = fopen('datos/categorias.json','r');
			$cJson = fread($fp,filesize('datos/categorias.json'));
			// $cArray = json_decode(fread($fp,filesize('datos/categorias.json')));
			fclose($fp);
			$cArray = json_decode($cJson,true);
			foreach($cArray as $cat){
		?>
		
			<li>
				<a href="productos.php?cat=<?php echo $cat['id']?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">
					<span class="icon-chevron-right"></span><?php echo $cat['nombre']?>
				</a>
			</li>
		
		<?php }?>
		<li>
				<a href="productos.php?cat=&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">
					<span class="icon-chevron-right"></span>Todos
				</a>
				
			</li>
			
	</ul>
	</div>
		</div>
		
	
<div class="well well-small">
	<!-- marcas -->
	<h4><u>Marcas</u></h4>

	<ul class="nav nav-list">
		
		<?php
			$fp = fopen('datos/marcas.json','r');
			$mJson = fread($fp,filesize('datos/marcas.json'));
			// $mArray = json_decode(fread($fp,filesize('datos/marcas.json')));
			fclose($fp);
			$mArray = json_decode($mJson,true);
			foreach($mArray as $marca){ 
		?>
			<li><a href="productos.php?marca=<?php echo $marca['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span><?php echo $marca['nombre']?></a></li>
		<?php }?>
		<li><a href="productos.php?marca=&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>"><span class="icon-chevron-right"></span>Todos</a></li>
		
	</ul>

	</div>
				<!--<div class="well well-small">
	<ul class="nav nav-list">
		<?php
			$fp = fopen('datos/perifericosdatos.json','r');
			$pJson = fread($fp,filesize('datos/perifericosdatos.json'));
			fclose($fp);
			$mArray = json_decode($pJson,true);
			foreach($mArray as $per){ 
		?>
			<a href="productos.php?per=<?php echo $per['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">
			 <span class="icon-chevron-right"></span><?php echo $per['nombre']?>
			
		<?php }?>
		

	</ul>
</div>
-->


		</div>
				</div>
	

			 