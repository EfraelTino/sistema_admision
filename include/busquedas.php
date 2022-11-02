<?php
    function buscarPais($conexion){
        $sql = "SELECT*FROM pais";
        return mysqli_query($conexion, $sql);
    }
    function buscarDepartamento ($conexion){
        $sql = "SELECT*FROM departamentos";
        return mysqli_query($conexion, $sql);
    }
    function buscarProvincia ($conexion){
        $sql = "SELECT*FROM provincia";
        return mysqli_query($conexion, $sql);
    }
    function buscarDistrito ($conexion){
        $sql = "SELECT*FROM distrito";
        return mysqli_query($conexion, $sql);
    }
?>