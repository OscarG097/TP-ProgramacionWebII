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
<!--<div class="well well-small">
	<ul class="nav nav-list">
	<?php
			$fp = fopen('datos/nuevos_ingresos.json','r');
			$nJson = fread($fp,filesize('datos/perifericosdatos.json'));
			fclose($fp);
			$mArray = json_decode($nJson,true);
			foreach($mArray as $nuevos){ 
		?>
			<a href="nuevos_ingresos.php?nuevos=<?php echo $nuevos['id']?>">
			 <span class="icon-chevron-right"></span><?php echo $nuevos['nombre']?>
			
		<?php }?>
		

	</ul>
</div>
-->
<!--<div class="well well-small">
	<ul class="nav nav-list">
	<?php
			$fp = fopen('datos/mejores_productos.json','r');
			$mJson = fread($fp,filesize('datos/perifericosdatos.json'));
			fclose($fp);
			$mArray = json_decode($mJson,true);
			foreach($mArray as $mejores){ 
		?>
			<a href="productos.php?per=<?php echo $mejores['id']?>&cat=<?php echo isset($_GET['cat'])?$_GET['cat']:''?>&marca=<?php echo isset($_GET['marca'])?$_GET['marca']:''?>">
			 <span class="icon-chevron-right"></span><?php echo $mejores['nombre']?>
			
		<?php }?>
		

	</ul>
</div>
-->