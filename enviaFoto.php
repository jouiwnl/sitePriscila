<?php
    include "conexao.php";

    $sqlImages = "SELECT cd_image, image_url FROM images";
    $resultadoImages = mysqli_query($conexao, $sqlImages);
    if (!$resultadoImages) {
        echo "Erro: " . mysqli_error($conexao);
    }

    $image_url = $_POST['image-url'];

    $sql = "INSERT INTO images (image_url) 
            VALUES ('$image_url') ";


    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        header('location: index.php?pagina=fotos');
    } else {
        echo "Erro: " . mysqli_error($conexao);
    }