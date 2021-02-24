<?php

    include "conexao.php";

    $sqlImages = "SELECT cd_image, image_url FROM images";
    $resultadoImages = mysqli_query($conexao, $sqlImages);
    if (!$resultadoImages) {
        echo "Erro: " . mysqli_error($conexao);
    }
?>

<!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/main_animations.css">
    </head>


<!-- Page Content  -->
<div id="content">
    <div class="container">
        <div class="row">   
            <?php   
                while ($linha = mysqli_fetch_array($resultadoImages)) {
                    echo "<div class='col-sm'>";
                    echo     $linha['image_url'];
                    echo "</div>";
                }  
            ?>   
        </div>    
    </div>   
</div>