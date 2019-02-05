<?php include 'header.php';?>
<?php

if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["tipo"] == 1) {
        header("location:admin.php");
    }
} else {
    header("location:login.php");
}
?>
<?php include 'menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["usuario"]["nombre"]; ?></h1>
				<p>Panel de control | <span class="label label-info"><?php echo $_SESSION["usuario"]["tipo"] == 1 ? 'Admin' : 'Cliente'; ?></span></p>
				<p>
          <div>
            <a href="encuesta.php" class="btn btn-primary btn-lg">Encuesta</a>
            <a href="oferta.php" class="btn btn-primary btn-lg">Ofertar</a>
          </div>

          <br>
          <br>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->

<?php include 'footer.php';?>
