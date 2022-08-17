<?php
    
   
    /* controller */
    require_once "controladores/plantilla.controller.php";
    require_once "controladores/conexion.controller.php";
    require_once "controladores/controlador.producto.php";
    require_once "controladores/controlador.usuario.php";
    /* modelos */
    //conexion 
    require_once "modelos/conexionBD.php"; 
    //DAO
    require_once "modelos/dao/productos.dao.php";
    require_once "modelos/dao/conexion.dao.php";
    require_once "modelos/dao/usuario.dao.php";


    //DTO
    require_once "modelos/dto/productos.dto.php";
    require_once "modelos/dto/usuario.dto.php";
    $objPlantilla = new PlantillaControler();
    $objPlantilla -> ctrPlantilla(); 
   
?>

 