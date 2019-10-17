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
        $ids = session_id();
        if (!$_SESSION["email"])
            $_SESSION["email"] = "";
           // echo "<h1>Inicia session</h1>" . $_SESSION["email"]; 
          
          ?>
    

    <?php include_once("../resources/html/footer.php"); ?>
    <script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    </script> 
</body>
</html>