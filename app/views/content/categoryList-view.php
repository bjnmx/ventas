<?php include "./app/views/inc/admin_security.php"; ?>
<div class="dashboard-container">
<div class="dashboard-header">
	<h1 style="color: white"  class="title titulofondo">Categorías</h1>
	<h2 class="subtitle"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de categorías</h2>
</div>
<div class="container pb-2 pt-2">

	<div class="form-rest mb-1 mt-1"></div>

	<?php
		use app\controllers\categoryController;

		$insCategoria = new categoryController();

		echo $insCategoria->listarCategoriaControlador($url[1],15,$url[0],"");
	?>
</div>
</div>