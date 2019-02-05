<?php

include 'conexion.php';
include 'usuarios.php';

/**
 * usuariosDAO es mi capa de acceso a los datos de la bd
 */

class usuariosDAO extends conexion{

  protected static $conx;

  public static function getConexion(){
    self::$conx = Conexion::conectar();
  }
  private static function desconectar(){
    self::$conx = null;
  }

  //metodo para validar al usuario, el parametro es de tipo object
  // y se retorna un booleano.
  public static function login($usuario){
    $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password";

    self::getConexion();

    $result = self::$conx->prepare($query);

    $userName = $usuario->getUsuario();
    $userPass = $usuario->getPassword();
    $result->bindValue(":usuario",$userName);
    $result->bindValue(":password",$userPass);

    $result->execute();

    if($result->rowCount() > 0){
      //return "Ok";
      $filas = $result->fetch();
      if($filas["usuario"] == $usuario->getUsuario()
      && $filas["password"] == $usuario->getPassword()){
        return true;
      }

    }
    return false;


  }


  //Metodo para obtener un usuarios

  public static function getUsuario($usuario){

  $query = "SELECT id,nombre,apellidopat,apellidomat,usuario,tipo,email FROM usuarios WHERE usuario = :usuario AND password = :password";

  self::getConexion();


  $resultado = self::$conx->prepare($query);

  $resultado->bindValue(":usuario", $usuario->getUsuario());
  $resultado->bindValue(":password", $usuario->getPassword());
  $resultado->execute();

  $filas = $resultado->fetch();

  $usuario = new Usuario();

  $usuario->setId($filas["id"]);
  $usuario->setNombre($filas["nombre"]);
  $usuario->setApellidopat($filas["apellidopat"]);
  $usuario->setApellidomat($filas["apellidomat"]);
  $usuario->setUsuario($filas["usuario"]);
  $usuario->setEmail($filas["email"]);
  $usuario->setTipo($filas["tipo"]);
  //->setFecha_registro($filas["fecha_registro"]);

  return $usuario;

  }

  /**
 * Metodo que sirve para registrar usuarios
 *
 * @param      object         $usuario
 * @return     boolean
 */
public static function ingresar($usuario)
{
    $query = "INSERT INTO usuarios
    (nombre, apellidopat,apellidomat, email,usuario,password,tipo) VALUES
     (:nombre, :apellidopat, :apellidomat, :email,:usuario,:password,:tipo)";

    self::getConexion();

    $resultado = self::$conx->prepare($query);

    $resultado->bindValue(":nombre", $usuario->getNombre());
    $resultado->bindValue(":apellidopat", $usuario->getApellidopat());
    $resultado->bindValue(":apellidomat", $usuario->getApellidomat());
    $resultado->bindValue(":email", $usuario->getEmail());
    $resultado->bindValue(":usuario", $usuario->getUsuario());
    $resultado->bindValue(":password", $usuario->getPassword());
    $resultado->bindValue(":tipo", $usuario->getTipo());

    if ($resultado->execute()) {
        return true;
    }
    return false;
}

public static function oferta($mensaje){

  $query = "INSERT INTO ofertas
  (oferta) VALUES
  (:oferta)";

  self::getConexion();

  $resultado = self::$conx->prepare($query);
  $resultado->bindValue(":oferta", $mensaje->getOferta());

  if ($resultado->execute()) {
      return true;
  }
  return false;

}



}
