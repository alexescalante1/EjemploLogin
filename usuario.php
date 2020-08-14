<?php session_start();
    
    require 'admin/config.php';
    require 'functions.php';

    ///confirmar 
    if(!isset($_SESSION['usuario'])){
        header('Location: '.RUTA.'login.php');
    }

    $conexion = conexion($bd_config);
    $user = iniciarSession('usuarios', $conexion);

    if ($user['tipo_usuario'] == 'usuario') {
        require 'views/usuario.view.php';
    }else{
        header('Location: '.RUTA.'index.php');
    }
?>