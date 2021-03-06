<?php 
include_once('inc/mensagem.php');
include_once('inc/header.php'); 
?>

<div class="container page" data-pagename="inicio">

    <div class="starter-template">
        <h1>Jardim dos sonhos</h1>
        <p class="lead">Protótipo funcional.</p>

        <div class="">
            <?php $mensagem = new Mensagem(); ?>
            <h4>Já foram cadastradas <?php $mensagem->getNumTotal(true); ?> <?php echo ( $mensagem->getNumTotal() == '1' ) ? "mensagem" : "mensagens"; ?></h4>
        </div>
    </div>

    <div class="row">        
        <div class="col-sm-5">
            <h2>Digite sua mensagem:</h2>

            <form role="form" class="form" name="form_envia_mensagem" id="form_envia_mensagem" method="POST" action="inc/execute.php"> 
                <div class="field-group">
                    <textarea name="user_mensagem" id="user_mensagem" class="form-control input-lg" placeholder="Digite a mensagem..." required></textarea>
                </div>
                <br>
                <div class="field-group">
                    <input name="user_nome" id="user_nome" class="form-control" type="text" placeholder="Seu nome" required />
                    <input name="user_email" id="user_email" class="form-control" type="email" placeholder="Seu email" required />
                </div>
                <br>
                <input name="submit" id="btn_submit" type="submit" value="ENVIAR" class="btn btn-success btn-submit" />
                <input name="action" id="form_action" type="hidden" value="cadastrar" />
                <span class="erro"></span>
            </form>
        </div>
    </div>



</div><!-- /.container -->

<?php include_once('inc/footer.php'); ?>