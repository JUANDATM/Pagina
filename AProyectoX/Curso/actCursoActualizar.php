<?php
    include_once("../Utilerias/BaseDatos.php");
    $post = $_POST; // 
    /*echo "<pre>";
    print_r($post);
    echo "</pre>";
    die("Muere"); */
    if (actualizaCurso($post)){
        $response['status']= true;
        $response['data']=$post;
     }
     else{
        $response['status']= false;
        $response['data']=$post;
     }
     echo json_encode($response);
?>