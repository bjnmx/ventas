<?php include "./app/views/inc/admin_security.php"; ?>
<div class="dashboard-container">
<div class="dashboard-header">
	<h1 style="color: white" class="titulofondo">Productos</h1>
	<h2 class="subtitle"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de productos</h2>
</div>
<div style="text-align: left;" class="container pb-2 pt-2">

	<div class="form-rest mb-2 mt-2 "></div>
    <div class="lista-productos" style="max-height: 400px; overflow-y: auto; overflow-x: hidden;">

	<?php
		use app\controllers\productController;

		$insProducto = new productController();

		echo $insProducto->listarProductoControlador($url[1],10,$url[0],"",0);
	?>
</div>
</div>