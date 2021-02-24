<?php
    include "conexao.php";

    require_once __DIR__ . '/vendor/autoload.php';

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $dt_nascimento = $_POST['dt_nascimento'];
    $turma_cd_turma = $_POST['turma_cd_turma'];
    $hoje = date('d/m/Y');

    $sql = "INSERT INTO aluno (nome, contato, dt_nascimento, turma_cd_turma) 
            VALUES ('$nome', '$contato', '$dt_nascimento', '$turma_cd_turma') ";
    
    $resultado = mysqli_query($conexao, $sql);


    $html = "
    <fieldset>
    <h1>Comprovante de Matrícula</h1>
    <p class='center sub-titulo'>
    Nº da turma <strong>".$turma_cd_turma."</strong> -
    VALOR <strong>R$ 00,00</strong>
    </p>
    <p>Informo, que por meio desse documento, eu <strong>".$nome."</strong>,</p>
    <p>Estou ciente do cadastro da matrícula na escola de teatro <strong>Priscila Leonor - Espaço Arte<strong>,</p>
    <p>e que em caso de perda de tal, meu cadastro será desconsiderado.</p>
    <p class='direita'>Criciúma, ".$hoje."</p>
    <p>Assinatura ...........................................................</p>
    ";
    
    $mpdf=new \Mpdf\Mpdf();
    $mpdf->SetDisplayMode('fullpage');
    $css = file_get_contents("styles/pdf.css");
    $mpdf->WriteHTML($css,1);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
    
    exit;

    


?>