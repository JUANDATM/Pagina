<?php
     include_once("../Utilerias/BaseDatos.php");
     $post = $_POST; // 
     if ($post['boton']=="Agregar")
     {
          $res = agregaCurso($post);
          $post["pk"]= $res;
          $response['status'] = true;
          $response['data'] = $post;
          echo json_encode($response);
     } else if ($post['boton']=="Actualizar")
            {
               if (actualizaCurso($post)){
                    $response['status']= true;
                    $response['data']=$post;
                 }
                 else{
                    $response['status']= false;
                    $response['data']=$post;
                 }
                 echo json_encode($response);
            } else if ($post['boton']=="Borrar")
            {
                 if (borraCurso($post)){
                    $response['status']= true;
                    $response['data']=$post;
                 }
                 else{
                    $response['status']= false;
                    $response['data']=$post;
                 }
                 echo json_encode($response);
            }
?>