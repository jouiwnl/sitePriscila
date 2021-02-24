
<div id="content">  
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Envie sua foto aqui
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Envie sua foto</h5>
                    </div>
                    <form action="enviaFoto.php" method="post">   
                        <div class="modal-body">
                            <div class="send-image">
                                <label for="send-image" style="float: left;">URL da foto</label>
                                <input type="text" class="form-control" name="image-url" id="" placeholder="URL instagram">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" id="send-image-button" name="send-image-button" class='btn btn-success'>Enviar Foto</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>    
</div>
