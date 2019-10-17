<?php
    include_once('../Utilerias/BaseDatos.php');
    $cursos = tipoCursos();
    foreach ($cursos as $tupla )
    {
        $id= $tupla['idtipo'];
        $nom = $tupla['nomtipo'];
        echo "<option value='$id'>$nom</option>";
    } 
?>