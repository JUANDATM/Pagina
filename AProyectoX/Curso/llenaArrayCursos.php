<?php
    include_once("../Utilerias/BaseDatos.php");
    
    $cur = cargaCursos();
    $data=array();
    $response=array();
    $response['status']=1;
    $response['data']=array();
    foreach ($cur as $tupla)
    {
        $data[$tupla['idcurso']]=$tupla;
    }
    $response['data']=$data;
    //echo "<pre>";
    //print_r($response);
    //echo "</pre>";
    //die("Muere");
    echo json_encode($response);
?>