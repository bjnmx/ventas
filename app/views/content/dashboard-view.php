<div class="dashboard-container">
    <div class="dashboard-header">
        <h1><i style="color: #4d4f5f" class="fab fa-dashcube fa-fw"></i> DASHBOARD</h1>
        <figure class="image is-128x128">
            <?php
            if(is_file("./app/views/fotos/".$_SESSION['foto'])){
                echo '<img class="is-rounded" src="'.APP_URL.'app/views/fotos/'.$_SESSION['foto'].'">';
            }else{
                echo '<img class="is-rounded" src="'.APP_URL.'app/views/fotos/default.png">';
            }
            ?>
        </figure>
        <h2 class="subtitle">¡Bienvenido(a) <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h2>
    </div>

<?php
	$total_cajas=$insLogin->seleccionarDatos("Normal","caja","caja_id",0);

	$total_usuarios=$insLogin->seleccionarDatos("Normal","usuario WHERE usuario_id!='1' AND usuario_id!='".$_SESSION['id']."'","usuario_id",0);

	$total_clientes=$insLogin->seleccionarDatos("Normal","cliente WHERE cliente_id!='1'","cliente_id",0);

	$total_categorias=$insLogin->seleccionarDatos("Normal","categoria","categoria_id",0);

	$total_productos=$insLogin->seleccionarDatos("Normal","producto","producto_id",0);

	$total_ventas=$insLogin->seleccionarDatos("Normal","venta","venta_id",0);

	$total_reporte=$insLogin->seleccionarDatos("Normal","venta_detalle","venta_detalle_id",0);
?>
    <div class="dashboard-content">
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>cashierList/">
                <p class="heading"><i class="fa-duotone fa-solid fa-cash-register"></i> &nbsp; Cajas</p>
                <p class="title"><?php echo $total_cajas->rowCount(); ?></p>
            </a>
        </div>
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>userList/">
                <p class="heading"><i class="fas fa-users fa-fw"></i> &nbsp; Usuarios</p>
                <p class="title"><?php echo $total_usuarios->rowCount(); ?></p>
            </a>
        </div>
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>clientList/">
                <p class="heading"><i class="fas fa-address-book fa-fw"></i> &nbsp; Clientes</p>
                <p class="title"><?php echo $total_clientes->rowCount(); ?></p>
            </a>
        </div>
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>categoryList/">
                <p class="heading"><i class="fas fa-tags fa-fw"></i> &nbsp; Categorías</p>
                <p class="title"><?php echo $total_categorias->rowCount(); ?></p>
            </a>
        </div>
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>productList/">
                <p class="heading"><i class="fas fa-cubes fa-fw"></i> &nbsp; Productos</p>
                <p class="title"><?php echo $total_productos->rowCount(); ?></p>
            </a>
        </div>
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>saleList/">
                <p class="heading"><i class="fa-solid fa-money-check-dollar-pen"></i> &nbsp; Ventas</p>
                <p class="title"><?php echo $total_ventas->rowCount(); ?></p>
            </a>
        </div>
        <div class="dashboard-item">
            <a href="<?php echo APP_URL; ?>reportSales/">
                <p class="heading"><i class="far fa-file-pdf fa-fw"></i> &nbsp; Reportes</p>
                <p class="title"><?php echo $total_reporte->rowCount(); ?></p>

            </a>
        </div>
    </div>
</div>
</div>