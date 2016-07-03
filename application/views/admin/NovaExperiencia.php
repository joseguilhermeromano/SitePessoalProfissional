<div class="container ">
    <div class="text-center">
        <h3>Cadastro de Experiência</h3>
        <hr>
    </div>
        <br>
        <?php echo validation_errors(); ?>
	
	<?php echo form_open('admin/inserir/Experiencias', 'role="form"'); ?>
        <div class="panel panel-default painel col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-md-3">
                    <b>Nome da Instituição:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <input type="text" name="nomeinstituicao" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <b>Tempo de Experiência:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <input type="text" name="tempoexperiencia" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <b>Descrição das Funções:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <textarea type="text" name="descricaofuncoes" value="" rows="10" class="estilo-input" style="width:100%"></textarea>
                </div>
            </div>
            <br>
            
            <center><?php echo form_submit('submit', 'Salvar Alterações', 'class="btn btn-primary"'); ?></center>
        </div>
        </form>
</div>



