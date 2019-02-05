<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';

session_start();


						$servidor="localhost";
						$nombre="root";
						$password="";
						$db="egresados";

						$conexion = new mysqli($servidor,$nombre,$password,$db);
						if($conexion->connect_error){
							die("Conexion Fallida".$conexion->connect_error);
						}

						if(isset($_POST['texto'])){
							$texto = $_POST['texto'];

              $sql = "INSERT INTO oferta(texto,completado)VALUES
              ('$texto', false)";

              if($conexion->query($sql)== true){
                echo 'correcto';

              }else{
                die("Error al insertar".$conexion->error);
              }

              $name = "my name"
$query = " INSERT INTO mytable VALUES ( 1 , '$name') "




						}
