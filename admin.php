<?php session_start();
    
    require 'admin/config.php';
    require 'functions.php';

    ///confirmar 
    if(!isset($_SESSION['usuario'])){
        header('Location: '.RUTA.'login.php');
    }

    $conexion = conexion($bd_config);
    $admin = iniciarSession('usuarios', $conexion);

    if ($admin['tipo_usuario'] == 'administrador') {
        require 'views/admin.view.php';
    }else{
        header('Location: '.RUTA.'index.php');
    }
    
?>