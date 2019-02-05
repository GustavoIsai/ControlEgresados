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


							<legend>Encuesta de Egresados</legend>


							<div class="form-group">
								<label for="usuario">1.- Calidad del personal docente</label>
                <br>
								<input checked="checked" name="uno" value="true" type="radio"> Mala
								<br>
 								<input checked="checked" name="uno" value="false" type="radio"> Regular
								<br>
                <input checked="checked" name="uno" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="uno" value="false" type="radio"> Muy Buena
                <br>
							</div>



              <div class="form-group">
                <label for="usuario">2.- Desarrollo de habilidades de
                  pensamiento crítico (análisis,
                  síntesis, resolución de
                  problemas y toma de decisiones)</label>
                <input checked="checked" name="dos" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="dos" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="dos" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="dos" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">3.- Enseñanza de las Ciencias
                  Básicas (Física, Matemáticas,
                  Química o Biología)</label>
                <input checked="checked" name="tres" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="tres" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="tres" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="tres" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">4.- Enseñanza del idioma inglés</label>
                <br>
                <input checked="checked" name="cuatro" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="cuatro" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="cuatro" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="cuatro" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">5.- Enseñanza de asignaturas técnicas específicas de formación profesional</label>
                <input checked="checked" name="cinco" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="cinco" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="cinco" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="cinco" value="false" type="radio"> Muy Buena
                <br>
              </div>


              <div class="form-group">
                <label for="usuario">6.- Desarrollo de habilidades de
                  comunicación oral y escrita</label>
                <input checked="checked" name="seis" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="seis" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="seis" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="seis" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">7.- Desarrollo de habilidades
                  para trabajar en equipo</label>
                <input checked="checked" name="siete" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="siete" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="siete" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="siete" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">8.- Desarrollo de actitudes y
                  valores</label>
                <input checked="checked" name="ocho" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="ocho" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="ocho" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="ocho" value="false" type="radio"> Muy Buena
                <br>
              </div>




              <div class="form-group">
                <label for="usuario">9.-Experiencia obtenida a través
                  de la Estadía</label>
                <input checked="checked" name="nueve" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="nueve" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="nueve" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="nueve" value="false" type="radio"> Muy Buena
                <br>
              </div>




              <div class="form-group">
                <label for="usuario">10.- Plan de Estudios</label>
                <input checked="checked" name="Diez" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="Diez" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="Diez" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="Diez" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">11.-Grado de satisfacción en
                  cuanto a su formación en la UPP</label>
                <input checked="checked" name="once" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="once" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="once" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="once" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">CALFIQUE EL GRADO DE SATISTACCIÓN DE LOS SERVICIOS
                  DE APOYO E INFRAESTRUCTURA QUE LE PROPORCINA LA UNIVERSIDAD.</label>
                <br>
                <br>
                <label for="Serv_III">1.- Área administrativa</label>
                <br>
                <input checked="checked" name="uno_tres" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="uno_tres" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="uno_tres" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="uno_tres" value="false" type="radio"> Muy Buena
                <br>
              </div>



              <div class="form-group">
                <label for="usuario">2.- Programa Educativo</label>
                <br>
                <input checked="checked" name="dos_tres" value="true" type="radio"> Mala
                <br>
                <input checked="checked" name="dos_tres" value="false" type="radio"> Regular
                <br>
                <input checked="checked" name="dos_tres" value="false" type="radio"> Buena
                <br>
                <input checked="checked" name="dos_tres" value="false" type="radio"> Muy Buena
                <br>
              </div>



                <div class="form-group">
                  <label for="usuario">3.- Servicio médico</label>
                  <br>
                  <input checked="checked" name="tres_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="tres_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="tres_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="tres_tres" value="false" type="radio"> Muy Buena
                  <br>
                </div>



                <div class="form-group">
                  <label for="usuario">4.- Actividades extracurriculares de cultura y deportes</label>
                  <br>
                  <input checked="checked" name="cuatro_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="cuatro_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="cuatro_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="cuatro_tres" value="false" type="radio"> Muy Buena
                  <br>
                </div>



                <div class="form-group">
                  <label for="usuario">5.- Aulas</label>
                  <br>
                  <input checked="checked" name="cinco_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="cinco_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="cinco_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="cinco_tres" value="false" type="radio"> Muy Buena
                  <br>
                </div>



                <div class="form-group">
                  <label for="usuario">6.- Laboratorios y talleres</label>
                  <br>
                  <input checked="checked" name="seis_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="seis_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="seis_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="seis_tres" value="false" type="radio"> Muy Buena
                  <br>
                </div>



                <div class="form-group">
                  <label for="usuario">7.-Biblioteca</label>
                  <br>
                  <input checked="checked" name="siete_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="siete_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="siete_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="siete_tres" value="false" type="radio"> Muy Buena
                  <br>
                </div>



                <div class="form-group">
                  <label for="usuario">8.- Instalaciones deportivas</label>
                  <br>
                  <input checked="checked" name="ocho_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="ocho_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="ocho_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="ocho_tres" value="false" type="radio"> Muy Buena
                  <br>
                </div>



                <div class="form-group">
                  <label for="usuario">9.- Grado de satisfacción con los espacios de la UPP</label>
                  <br>
                  <input checked="checked" name="nueve_tres" value="true" type="radio"> Mala
                  <br>
                  <input checked="checked" name="nueve_tres" value="false" type="radio"> Regular
                  <br>
                  <input checked="checked" name="nueve_tres" value="false" type="radio"> Buena
                  <br>
                  <input checked="checked" name="nueve_tres" value="false" type="radio"> Muy Buena
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
