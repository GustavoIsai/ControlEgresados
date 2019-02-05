<?php include 'header.php';?>
<?php include 'menu.php' ?>

<div class="container">

	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-body">

          <form action = "ofertaCode.php" method="POST" role="form">

							<legend>Publicar Oferta</legend>

							<div class="form-group">
								<td width="30%" valign="top"><strong></strong></td>
								<td> <textarea name="" cols="47" rows="7" id="mensaje"></textarea>
								</td>

							</div>






							<button type="submit" class="btn btn-success">Enviar</button>
						</form>


					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->





<?php include 'footer.php';?>
