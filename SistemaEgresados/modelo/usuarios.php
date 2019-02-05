<?php

/**
 *
 */
class Usuario
{

  private $id;
  private $nombre;
  private $apellidopat;
  private $apellidomat;
  private $usuario;
  private $email;
  private $password;
  private $tipo;
  private $fechare;
  private $oferta;


  public function getId(){
  return $this->id;
}

public function setId($id){
  $this->id = $id;
}

public function getNombre(){
  return $this->nombre;
}

public function setNombre($nombre){
  $this->nombre = $nombre;
}

public function getApellidopat(){
  return $this->apellidopat;
}

public function setApellidopat($apellidopat){
  $this->apellidopat = $apellidopat;
}

public function getApellidomat(){
  return $this->apellidomat;
}

public function setApellidomat($apellidomat){
  $this->apellidomat = $apellidomat;
}

public function getUsuario(){
  return $this->usuario;
}

public function setUsuario($usuario){
  $this->usuario = $usuario;
}

public function getEmail(){
  return $this->email;
}

public function setEmail($email){
  $this->email = $email;
}

public function getPassword(){
  return $this->password;
}

public function setPassword($password){
  $this->password = $password;
}

public function getTipo(){
  return $this->tipo;
}

public function setTipo($tipo){
  $this->tipo = $tipo;
}

public function getFechare(){
  return $this->fechare;
}

public function setFechare($fechare){
  $this->fechare = $fechare;
}

public function getOferta(){
  return $this->oferta;
}

public function setOferta(){
  return $this->oferta;
}

}








 ?>
