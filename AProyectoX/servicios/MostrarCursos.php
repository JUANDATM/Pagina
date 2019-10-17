<?php 
    include_once("../Utilerias/BaseDatos.php");
    header('Content-type: application/json; charset=utf-8');
    $method=$_SERVER['REQUEST_METHOD'];
    $response = array();
    $result = consultaCursos();
    if (!empty($result)) {
        $response["success"] = "200";
        $response["message"] = "Cursos encontrados";

        $response["curso"] = array();
        foreach ($result as $tupla)
        {
            array_push($response["curso"], $tupla);
        }
    }
    else{
        $response["success"] = "204";
        $response["message"] = "Cursos no encontrados";
        header($_SERVER['SERVER_PROTOCOL'] . " 500  Error interno del servidor ");
    }
    echo json_encode($response);
?>