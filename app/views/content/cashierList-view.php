<?php include "./app/views/inc/admin_security.php"; ?>
<div class="dashboard-container">
<div class="dashboard-header">
	<h1  style="color: white" class="title titulofondo">Cajas</h1>
	<h2 class="subtitle"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de cajas</h2>
</div>
<div class="container pb-2 pt-2">

	<div class="form-rest mb-2 mt-2"></div>

	<?php
		use app\controllers\cashierController;

		$insCaja = new cashierController();

		echo $insCaja->listarCajaControlador($url[1],15,$url[0],"");
	?>
</div>

</div>