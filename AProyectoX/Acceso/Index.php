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
    <?php include_once("../resources/html/header.php"); ?>
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <div class="card-content">
                     <h4>Control de Acceso</h4>
                    <br>
                    <form id="frm-acceso" method="post" >
                        <div class="row">
                            <div class="input-field col s12">
                                <input type="email" id="corr" name="corr" class="validate">
                                <label for="corr">Correo:</label>
                            </div>
                            <div class="input-field col s12">
                                <input type="password" id="cont" name="cont" class="validate">
                                <label for="cont">Contraseña:</label>
                            </div>
                            <div class="input-field col s12">
                                <a id="un-lock" class="btn-floating btn-large waves-effect waves-light left" >
                                    <i class="material-icons">lock_open</i>
                                </a>
                                <a id="add_registro" class="btn-floating btn-large waves-effect waves-light right" >
                                    <i class="material-icons">person_add</i>
                                </a>
                                <label for="un_lock">Acceder:</label>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
   <!-- Ventana Modal -->
   <div class="modal" id="modalRegistro">
       <div class="modal-content">
           <h4>Registro de Nuevos Usuarios</h4>
           <br>
           <form id="frm-registro" method="post">
              <div class="row">
                   <div class="input-field col s12">
                       <input type="email" id="correo" name="correo" class="validate">
                       <label for="correo">Correo electronico:</label>
                   </div>
                   <div class="input-field col s12">
                      <input type="text" id="nom" name="nom" class="validate">
                      <label for="nom">Nombre Completo:</label>
                </div>
                <div class="input-field col s12">
                      <input type="password" id="pwd" name="pwd" class="validate">
                      <label for="pwd">Contraseña:</label>
                </div>
             </div>
           </form>
       </div>
       <div class="modal-footer">
           <a id="guardar" class="modal-action waves-effect waves-green btn-flat" >Guardar Registro</a>
       </div>
   </div>
   <?php include_once("../resources/html/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.materialize.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>     
    <script type="text/javascript" src="../resources/js/acceso.js"></script> 

</body>
</html>