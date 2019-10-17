<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/dataTables.materialize.css"/>
    <link type="text/css" rel="stylesheet" href="../css/default.css"/>
    <link rel="icon" type="image/x-icon" href="../fonts/favicon.ico" />
</head>
<body>
    <?php include_once("../resources/html/header.php");
          include_once("../Utilerias/BaseDatos.php");
          if  (!isset($_SESSION))
            session_start();   
            //echo "<h1>Validando Tu y idsess</h1>" .  $_SESSION["email"]; 
                $idSess = session_id();
               // echo "<h1>Validando Tu y idSess</h1>" . $idSess;
                $tu = $_SESSION["tu"];
                $correo = $_SESSION["email"];
                $idsess = "";
                validaSess($correo, $tu, $idsess);
                //echo "<h1>idsess</h1>" . $idsess;
                //echo "<h1>tu</h1>" . $tu;
                if ($idsess == $idSess && $tu == 52)
                {
                    $_SESSION["tu"]=$tu;
                    $_SESSION["email"]=$correo;
                    $_SESSION["ids"]=$idSess;
                    $response['status']= true;
                }
                else
                {
                    header("location:http://localhost/AProyectox/Inicio");
                }
    ?>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <a id="add-record" class="btn-floating btn-large waves-effect waves-light right" >
                    <i class="material-icons">add</i>
                </a>
                <a id="print-record" class="btn-floating btn-large waves-effect waves-light right" >
                    <i class="material-icons">local_printshop</i>
                </a>
                <div class="card-content">
                    <span><h3>Cursos</h3></span>
                        <table id='cur' class='highlight bordered dataTable'>
                            <thead>
                            <tr><th>Título del Curso</th><th>Descripción del Curso</th><th>Costo</th><th>Imagen</th><th>Tipo Curso</th><th></th></tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once("CargaCursos.php");
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Ventana Modal -->
   <div class="modal" id="modalRegistro">
       <div class="modal-content">
           <h4>Alta y Edición de Cursos</h4>
           <br>
           <form id="frm-cursos" method="post" enctype="multipart/form-data" >
              <div class="row">
                   <div class="input-field col s12">
                       <input type="hidden" id="pk" name="pk" value="0">
                       <input type="text" id="tit" name="tit" class="validate">
                       <label for="tit">Título del Curso</label>
                   </div>
                   <div class="input-field col s12">
                       <input type="text" id="descrip" name="descrip" class="validate">
                       <label for="descrip">Descripción del curso</label>
                   </div>
                   <div class="input-field col s12">
                      <input type="text" id="costo" name="costo" class="validate">
                      <label for="costo">Costo del Curso:</label>
                </div>
                <div class="input-field col s12">
                      <select name="idtip" id="idtip" class="browser-default">
                      <?php
                                include_once("CargaSelect.php");
                      ?>
                      </select>
                </div>
                <div class="input-field col s12">
                      <input type="file" id="arch" name="arch">
                      <input type="hidden" id="imagen" name="imagen">
                </div>
             </div>
           </form>
       </div>
       <div class="modal-footer">
           <a id="guardar" class="modal-action waves-effect waves-green btn-flat" >Guardar</a>
       </div>
   </div>
   <?php include_once("../resources/html/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.materialize.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>     
    <script type="text/javascript" src="../resources/js/Cursos.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
        $('select').formSelect();
     });
    </script> 


</body>
</html>