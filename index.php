<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Priscila Leonor - Espaço Arte</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/main_animations.css">

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="wrapper" style="background-size: cover; 
                                    background-position: center; 
                                    background-image: url(imgs/fundo.png);">

            <!--Sidebar-->
            <?php
                include "navbar.php";
            ?>

            <!-- Page Content  -->
            <div id="content">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Menu</span>
                        </button>
                        <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-align-justify"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?pagina=inicio">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=sobre">Sobre</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=fotos">Fotos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=matricula">Matrículas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?pagina=adicionar_foto">Adicione uma foto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                
                <div class="container">
                    <?php
                        error_reporting(E_ALL ^E_NOTICE);
                        $pagina = $_GET['pagina'];
                        
                        if ($pagina == "inicio" or !$pagina) {
                            include "inicio.php";
                        } else if ($pagina == "sobre") {
                            include "about.php";
                        } else if ($pagina == "fotos") {
                            include "page-images.php";
                        } else if ($pagina == "matricula") {
                            include "matricula.php";
                        } else if ($pagina == "contatos") {
                            include "contacts.php";
                        } else if ($pagina == "adicionar_foto") {
                            include "addImages.php";
                        } else if ($pagina == "eventos") {
                            include "events.php";
                        } else if ($pagina == "aulas") {
                            include "classes.php";
                        } else {
                            echo "<h2 style='color: white;'>OPERAÇÃO INVÁLIDA</h2>";
                        }
                        
                    ?>

                </div>
            </div> 
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <script src="scripts/index.js"></script>
    </body>
</html>