<?php
    include_once('../Utilerias/BaseDatos.php');
    $cursos = cargaCursos();
    foreach ($cursos as $tupla )
    {
        echo "<tr id='". $tupla['idcurso'] . "'>
            <td>" . $tupla['titcurso'] . "</td>
            <td>" . $tupla['descripcurso'] . "</td>
            <td>" . $tupla['costo'] . "</td>
            <td>" . $tupla['imagen'] . "</td>
            <td>" . $tupla['nomtipo'] . "</td>
            <td>
                <i class='material-icons edit' id-record='" . $tupla['idcurso'] . "'>create</i>
                <i class='material-icons delete' id-record='". $tupla['idcurso'] . "'>delete_forever</i>
            </td>
        </tr>";
    } 
?>