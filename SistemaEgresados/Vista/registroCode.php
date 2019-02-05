<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["txtNombre"]) && isset($_POST["txtApellidopat"]) && isset($_POST["txtApellidopat"]) && isset($_POST["txtEmail"]) && isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])) {
        $txtNombre     = validar_campo($_POST["txtNombre"]);
        $txtApellidopat = validar_campo($_POST["txtApellidopat"]);
        $txtApellidomat = validar_campo($_POST["txtApellidomat"]);
        $txtEmail      = validar_campo($_POST["txtEmail"]);
        $txtUsuario    = validar_campo($_POST["txtUsuario"]);
        $txtPassword   = validar_campo($_POST["txtPassword"]);
        $txtTipo = 2;

        //$nombre, $apellidopat, $apellidomat, $usuario, $email,$tipo,$password
        if (UsuarioControlador::ingresar($txtNombre,$txtApellidopat,$txtApellidomat,$txtUsuario,  $txtEmail,$txtTipo, $txtPassword)) {
            $usuario = UsuarioControlador::getUsuario($txtUsuario, $txtPassword);

            $_SESSION["usuario"] = array(
                "id"         => $usuario->getId(),
                "nombre"     => $usuario->getNombre(),
                "apellidopat" => $usuario->getApellidopat(),
                "apellidomat" =>$usuario->getApellidomat(),
                "usuario"    => $usuario->getUsuario(),
                "email"      => $usuario->getEmail(),
                "tipo" => $usuario->getTipo(),
            );
            header("location:admin.php");
        }
    }
} else {
    header("location:registro.php?error=1");
}
