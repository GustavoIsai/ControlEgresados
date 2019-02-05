<?php

/**
 *
 */
class Conexion
{
  /**
   * Conexion a la base de datos
   *en la parte de return regresa la conexion(PDO)
   */

  public static function conectar(){
    try {
      //conexion host, nombre base de datos, usuario y contraseña.
      $cn = new PDO("mysql:host=localhost;dbname=egresados", "root","");
      //echo "Conectado";
      return $cn;
    } catch (PDOException $ex) {
      die($ex->getMessage());
    }

  }


}

//Prueba de conexion, se agregara en el try
//Conexion::conectar();
