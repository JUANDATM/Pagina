<?php
    include_once("../Utilerias/BaseDatos.php");
    $post = $_POST; //
    $XFile = $_FILES["arch"];
    $directorio = "../uploads/";
    $nomArch = md5($XFile["name"]);
    $tipoArchivo = strtolower(pathinfo($XFile["name"],PATHINFO_EXTENSION));
    $nomArch = $directorio . $nomArch . ".$tipoArchivo";
    if (move_uploaded_file($XFile["tmp_name"],$nomArch)){
        $res = agregaCurso($post, $nomArch);
        $post["pk"]= $res;
        $response['status'] = true;
        $response['data'] = $post;
        $response['data']['imagen']=$nomArch;
    }else{
        $response['status'] = false;
        $response['data'] = $post;
    }
    echo json_encode($response);
?>