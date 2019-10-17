<header>
<nav>
    <!-- Menú para cuando se despliega la página en un dispositivo grande   -->
    <div class="nav-wrapper">
      <a href="http://localhost/aproyectox/home/" class="brand-logo">Logo</a>
      <a href="#" data-target="mobile-demo" 
         class="sidenav-trigger"><i class="material-icons">
         menu</i></a>
      <ul class="right hide-on-med-and-down">
      <?php include_once("../resources/html/header.php");
          include_once("../Utilerias/BaseDatos.php");
            //echo "<h1>Validando Tu y idsess</h1>" .  $_SESSION["email"]; 
                if  (!isset($_SESSION))
                {
                    session_start();
                    $idSess = session_id();
                }
                        
               // echo "<h1>Validando Tu y idSess</h1>" . $idSess;
                $tu = isset($_SESSION["tu"])?$_SESSION["tu"]:"";
                $correo = isset($_SESSION["email"])?$_SESSION["email"]:"";
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
                    echo "<li><a href='http://localhost/aproyectox/Curso/'>Cursos</a></li>";
                }
    ?>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
<!-- Menú para cuando se despliega la página en un dispositivo móvil   -->
  <ul class="sidenav" id="mobile-demo">
    <li><a href="http://localhost/aproyectox/Curso/">Curso</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
</header>