<div class="container">
        
 	<div id="top" class="row">
                <div class="col-sm-4">
                    <h2>Projetos</h2>
                </div>
		<div class="col-sm-4">
                    <div class="input-group h2">
                        <input name="pesquisa" class="form-control" id="search" type="text" placeholder="Buscar por Código...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </span>
                    </div>
		</div>
		<div class="col-sm-4">
			<a href="<?php echo site_url("admin/novoprojeto"); ?>" class="btn btn-primary pull-right h2">Novo Projeto</a>
		</div>
	</div> <!-- /#top -->
    
     <hr />

        <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0" >
            <thead style="background-color: #104E8B; color: #ffffff; font-size: 10pt;">
                <tr>
                    <th><center>Código</center></th>
                    <th>Nome do Projeto</th>
                    <th>Descrição</th>
                    <th><center>Links das 4 Imagens</center></th>
                    <th><center>Comentários</center></th>
                    <th><center>Alterar</center></th>
                    <th><center>Excluir</center></th>
                 </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form>
                            <center><input type="submit" class="btn btn-success" value="Alterar" style="font-size: 12pt;"></center>
                        </form>
                    </td>
                    <td>
                        <form>
                            <center><input type="submit" class="btn btn-danger" value="Excluir" style="font-size: 12pt;"></center>
                        </form>
                    </td>
                </tr>
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->

    </div>
    <!-- /.container -->

