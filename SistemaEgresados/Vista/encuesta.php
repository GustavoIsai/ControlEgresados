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

          <form action = "encuestaCode.php" method="POST" role="form">


							<legend>Encuesta de Empleadores</legend>

							<div class="form-group">
								<label for="nombre">Fecha de Aplicacion de la Encuesta</label>
								<input type="date" name="txtFecha" class="form-control" id="nombre" autofocus required placeholder="D/M/AÑO">
							</div>

              <div class="form-group">
                <label for="nombre">Nombre del egresado que trabaja con usted</label>
                <input type="text" name="txtNombre" class="form-control" id="nombre" autofocus required placeholder="">
              </div>

              <div class="form-group">
                <label for="nombre">Nombre de la empresa</label>
                <input type="text" name="txtEmpresa" class="form-control" id="nombre" autofocus required placeholder="">
              </div>

							<div class="form-group">
								<label for="usuario">Domicilio de la empresa</label>
								<input type="text" name="txtDomicilio" class="form-control" id="email"  required placeholder="Ingresa tu dirección de e-mail">
							</div>

							<div class="form-group">
								<label for="usuario">Telefono</label>
								<input type="text" name="txtTelefono" class="form-control" id="usuario" autofocus required placeholder="01 800 ">
							</div>

							<div class="form-group">
								<label for="usuario">Puesto que desempeña el egresado</label>
								<input type="text" name="txtPuesto" class="form-control" required id="usuario" placeholder="">
							</div>

							<div class="form-group">
								<label for="usuario">¿Considera que las actividades que desempeña el egresado están relacionadas con su formación académica?</label>
								<input checked="checked" name="answer" value="true" type="radio"> No
								<br>
 								<input checked="checked" name="answer" value="false" type="radio"> Si
								<br>
							</div>


							<div class="form-group">
								<label for="usuario">¿Considera que la formación académica que se le proporcionó al egresado en la Universidad es la adecuada
									para realizar las funciones que su empresa o institución requiere?</label>
									<input checked="checked" name="an" value="true" type="radio"> De Acuerdo
									<br>
									<input checked="checked" name="an" value="false" type="radio"> En Desacuerdo
									<br>
							</div>

							<div class="form-group">
								<label for="usuario">
															¿Qué porcentaje de satisfacción tuvo del egresado al ser contratado, de acuerdo a los requerimientos de su
								empresa o institución?</label>
									<input checked="checked" name="por" value="100" type="radio"> 100%
									<br>
									<input checked="checked" name="por" value="75" type="radio"> 75%
									<br>
									<input checked="checked" name="por" value="50" type="radio"> 50%
									<br>
									<input checked="checked" name="por" value="25" type="radio"> 25%
									<br>
									<input checked="checked" name="por" value="0" type="radio"> 0%
									<br>
							</div>

							<div class="form-group">
								<label for="usuario">
															¿Cómo evalúa el comportamiento del egresado en cuestión a valores?</label>
									<input checked="checked" name="answ" value="100" type="radio"> Alto
									<br>
									<input checked="checked" name="answ" value="75" type="radio"> Regular
									<br>
									<input checked="checked" name="answ" value="50" type="radio"> Bajo
									<br>
									<input checked="checked" name="answ" value="25" type="radio"> Muy Bajo
									<br>
							</div>


							<div class="form-group">
								<label for="usuario">¿Tomó el egresado alguna capacitación al inicio de sus actividades?</label>
								<input checked="checked" name="idea" value="true" type="radio"> No
								<br>
 								<input checked="checked" name="idea" value="false" type="radio"> Si
								<br>
							</div>


							<div class="form-group">
								<label for="usuario">¿Contrataría usted nuevamente a un egresado de nuestra institución en caso de requerirlo?</label>
								<input checked="checked" name="ans" value="true" type="radio"> De Acuerdo
								<br>
								<input checked="checked" name="ans" value="false" type="radio"> En Desacuerdo
								<br>
							</div>


							<div class="form-group">
								<label for="usuario"> ¿TIENE ALGUN COMENTARIO O SUGERENCIA PARA ENRIQUECER AL PROGRAMA EDUCATIVO DE LA UNIVERSIDAD?<label>
								<td width="30%" valign="top"><strong></strong></td>
								<td> <textarea name="mensaje" cols="47" rows="7" id="mensaje"></textarea>
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
