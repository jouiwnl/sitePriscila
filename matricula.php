<?php
    include "conexao.php";

    $sqlTurmas = "SELECT cd_turma, nome FROM turma ORDER BY nome";
    $resultadoTurmas = mysqli_query($conexao, $sqlTurmas);
    if (!$resultadoTurmas) {
        echo "Erro: " . mysqli_error($conexao);
    }

?>

    <!-- Page Content  -->
    <div id="content">
        <div class="parent" style="display: flex; align-items: center; justify-content: center; ">
            <section id="container" class="jumbotron text-center" style="width: 70%; animation: transitionIn 0.75s;">
                <div class="container">
                    <form action="gravaMatricula.php" method="post">
                        <div class="row">   
                            <div class="col-sm">
                                <label for="" style="float: left;">Nome Completo</label>
                                <input type="text" class="form-control" name="nome" id="" aria-describedby="emailHelp" placeholder="Nome Completo" style="margin-bottom: 23px;">
                            </div>
                            <div class="col-sm">
                                <label for="" style="float: left;">Contato</label>
                                <input type="text" class="form-control" name="contato" id="" placeholder="Email ou Telefone" style="margin-bottom: 23px;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <label for="" style="float: left;">Data de Nascimento</label>
                                <input type="date" class="form-control" name="dt_nascimento" id="" placeholder="Data de nascimento" style="margin-bottom: 50px;">
                            </div>

                            <div class="col-sm">    
                                <label for="cd_turma" style="float: left;">Selecione a Turma</label>
                                <select class="form-control" id="cd_turma" name="turma_cd_turma" style="margin-bottom: 50px;">
                                    <option value="" disabled selected>Escolha uma opção</option>
                                        <?php
                                            while ($linha = mysqli_fetch_array($resultadoTurmas)) {
                                                $selecionado = "";
                                                echo "<option value='$linha[cd_turma]' $selecionado>";
                                                echo $linha['nome'];
                                                echo "</option>";
                                            }
                                    ?>
                                </select>
                            </div>    
                        </div>    
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">
                            <label class="form-check-label" for="exampleCheck1" style="margin-bottom: 20px;">Confirmo que os dados estão corretos</label>   
                        </div>
                        <button type="submit" id="hiddenButton" style="display: none;" name="hidden" class='btn btn-success'>Gerar Comprovante de Matrícula</button>
                    </form>    
                </div>
            </section>  
        </div>      
    </div>

