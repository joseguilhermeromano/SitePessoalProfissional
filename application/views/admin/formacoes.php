<div class="container">
    <h2>Formações</h2>
    <hr>
    <br><br>
        <?php if (isset($mensagem)){?>
            <div class="alert alert-info" role="alert"><strong>Mensagem: </strong><?php echo $mensagem;?></div>
        <?php } ?>
    <br><br>
 	<div id="top" class="row">
                <div class="col-sm-8">
                    <h2>Experiência</h2>
                </div>
		<div class="col-sm-4">
			<a href="<?php echo site_url("admin/novaexperiencia"); ?>" class="btn btn-primary pull-right h2">Nova Experiência</a>
		</div>
	</div> <!-- /#top -->
    
     <hr />

        <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0" >
            <thead style="background-color: #104E8B; color: #ffffff; font-size: 10pt;">
                <tr>
                    <th><center>Código</center></th>
                    <th class="text-center">Nome da Instituição</th>
                    <th class="text-center">Tempo de Experiência</th>
                    <th>Descrição das Funções</th>
                    <th><center>Alterar</center></th>
                    <th><center>Excluir</center></th>
                 </tr>
            </thead>
            <tbody>
                <?php foreach ($experiencias as $item): ?>
                <tr>
                    <td class="text-center"><?php echo $item['expe_cd']; ?></td>
                    <td class="text-center"><?php echo $item['expe_inst_nm']; ?></td>
                    <td class="text-center"><?php echo $item['expe_tempo']; ?></td>
                    <td><?php echo $item['expe_func_ds']; ?></td>
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
                <?php endforeach; ?>  
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
 
  	<div id="top" class="row">
                <div class="col-sm-8">
                    <h2>Linguagens/Sistemas/Ferramentas de Domínio</h2>
                </div>
		<div class="col-sm-4">
			<a href="<?php echo site_url("admin/novoconhecimento"); ?>" class="btn btn-primary pull-right h2">Novo Registro</a>
		</div>
	</div> <!-- /#top -->
    
     <hr />

        <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0" >
            <thead style="background-color: #104E8B; color: #ffffff; font-size: 10pt;">
                <tr>
                    <th><center>Código</center></th>
                    <th>Ling./Sist./Ferram.</th>
                    <th>Descrição</th>
                    <th><center>Nível de Conhecimento</center></th>
                    <th><center>Alterar</center></th>
                    <th><center>Excluir</center></th>
                 </tr>
            </thead>
            <tbody>
            <?php foreach ($conhecimentos as $item): ?>
                <tr>
                    <td class="text-center"><?php echo $item['cote_cd']; ?></td>
                    <td><?php echo $item['cote_nm']; ?></td>
                    <td><?php echo $item['cote_ds']; ?></td>
                    <td><?php echo $item['cote_nico']; ?></td>
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
            <?php endforeach; ?>  
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
 
 
  	<div id="top" class="row">
                <div class="col-sm-8">
                    <h2>Escolaridade</h2>
                </div>
		<div class="col-sm-4">
			<a href="<?php echo site_url("admin/novaescolaridade"); ?>" class="btn btn-primary pull-right h2">Nova Escolaridade</a>
		</div>
	</div> <!-- /#top -->
    
     <hr />

        <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0" >
            <thead style="background-color: #104E8B; color: #ffffff; font-size: 10pt;">
                <tr>
                    <th class="text-center"><center>Código</center></th>
                    <th>Nome do Curso</th>
                    <th>Nome da Instituição</th>
                    <th>Descrição</th>
                    <th><center>Duração</center></th>
                    <th><center>Data Inicial</center></th>
                    <th><center>Data Final</center></th>
                    <th><center>Alterar</center></th>
                    <th><center>Excluir</center></th>
                 </tr>
            </thead>
            <tbody>
            <?php foreach ($escolaridades as $item): ?>
                <tr>
                    <td class="text-center"><?php echo $item['esco_cd']; ?></td>
                    <td class="text-center"><?php echo $item['esco_curso_nm']; ?></td>
                    <td class="text-center"><?php echo $item['esco_inst_nm']; ?></td>
                    <td><?php echo $item['esco_ds']; ?></td>
                    <td><?php echo $item['esco_dura']; ?></td>
                    <td class="text-center"><?php echo $item['esco_inic_dt']; ?></td>
                    <td class="text-center"><?php echo $item['esco_final_dt']; ?></td>
                    
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
            <?php endforeach; ?> 
            </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->

    </div>
    <!-- /.container -->



