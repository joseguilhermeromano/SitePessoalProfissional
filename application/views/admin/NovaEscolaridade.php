<div class="container ">
    <div class="text-center">
        <h3>Cadastro de Escolaridade</h3>
        <hr>
    </div>
        <?php echo validation_errors(); ?>
	
	<?php echo form_open('admin/inserir/Escolaridades', 'role="form"'); ?>
        <br>
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
                    <b>Nome do Curso:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <input type="text" name="nomecurso" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <b>Duração:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <input type="text" name="duracao" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <b>Data Inicial:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <input type="text" name="datainicial" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <b>Data Final:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <input type="text" name="datafinal" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <b>Descrição:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-9">
                    <textarea type="text" name="descricaocurso" value="" rows="10" class="estilo-input" style="width:100%"></textarea>
                </div>
            </div>
            <br>
            <center><?php echo form_submit('submit', 'Salvar Alterações', 'class="btn btn-primary"'); ?></center>
        </div>
</form>
</div>





