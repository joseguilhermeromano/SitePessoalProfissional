<div class="container ">
    <div class="text-center">
        <h3>Cadastro de Linguagem/Sistema/Ferramenta de Domínio</h3>
        <hr>
    </div>
        <?php echo validation_errors(); ?>
	
	<?php echo form_open('admin/inserir/Conhecimentos', 'role="form"'); ?>
        <br>
        <div class="panel panel-default painel col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="row">
                <div class="col-md-5">
                    <b>Nome da Ling./Sist./Ferram.:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-7">
                    <input type="text" name="conhecimento" value="" class="estilo-input" style="width:100%">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <b>Nível de Conhecimento:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-7">
                    <select name="nivelconhecimento" class="estilo-input" style="width: 100%">
                        <option>Básico</option>
                        <option>Intermediário</option>
                        <option>Avançado</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-5">
                    <b>Descrição:</b>
                </div>
                <br class="hidden-lg hidden-md hidden-sm">
                <div class="col-md-7">
                    <textarea type="text" name="descricaoconhecimento" value="" rows="10" class="estilo-input" style="width:100%"></textarea>
                </div>
            </div>
            <br>
             <center><?php echo form_submit('submit', 'Salvar Alterações', 'class="btn btn-primary"'); ?></center>
        </div>
        </form>
</div>



