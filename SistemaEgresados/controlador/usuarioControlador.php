<?php


include '../modelo/usuariosDAO.php';

/**
 *
 */
class usuarioControlador
{

  public static function login($usuario,$password)
  {
    $obj_usuario = new usuario();
    $obj_usuario->setUsuario($usuario);
    $obj_usuario->setPassword($password);

    return usuariosDAO::login($obj_usuario);
  }

  public function getUsuario($usuario,$password){

    $obj_usuario = new usuario();
    $obj_usuario->setUsuario($usuario);
    $obj_usuario->setPassword($password);

    return usuariosDAO::getUsuario($obj_usuario);


  }

  public function ingresar($nombre, $apellidopat, $apellidomat, $usuario, $email,$tipo,$password){

    $obj_usuario = new usuario();
    $obj_usuario->setNombre($nombre);
    $obj_usuario->setApellidopat($apellidopat);
    $obj_usuario->setApellidomat($apellidomat);
    $obj_usuario->setUsuario($usuario);
    $obj_usuario->setEmail($email);
    $obj_usuario->setTipo($tipo);
    $obj_usuario->setPassword($password);

    return usuariosDAO::ingresar($obj_usuario);


  }


  public function oferta($oferta){
    $obj_usuario = new usuario();
    $obj_usuario->setOferta($oferta);

  }



}
