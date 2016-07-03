<div class="container">
    <div class="text-center">
        <h2>FORMAÇÃO</h2>
        <hr>
    </div>
        <br>
    <div class="panel panel-default painel">
        <h3 class="hidden-xs"><b>Experiência</b></h3>
        <h4 class="hidden-lg hidden-md hidden-sm"><b>Experiência</b></h4>
        <br>
        <?php foreach ($experiencias as $item): ?>
        <table border="0 px solid" class="formato-tabela">
            <tr colspan="2">
                <td style="width: 25%"><b>Nome da Instituição:</b></td><td><?php echo $item['expe_inst_nm']; ?></td>
            </tr>
            <tr colspan="2" >
                <td style="width: 25%"><b>Tempo de Experiência:</b></td><td><?php echo $item['expe_tempo']; ?></td>
            </tr>
            <tr colspan="2" >
                <td style="width: 25%"><b>Funções Exercidas:</b></td><td><?php echo $item['expe_func_ds']; ?></td>
            </tr>
        </table>
        <br>
        <?php endforeach; ?>
        <h3 class="hidden-xs"><b>Linguagens/Sistemas/Ferramentas de Domínio</b></h3>
        <h4 class="hidden-lg hidden-md hidden-sm"><b>Linguagens/Sistemas/Ferramentas de Domínio</b></h4>
        <br>
        <?php foreach ($conhecimentos as $item): ?>
        <table border="0 px solid" class="formato-tabela">
            <tr colspan="2">
                <td style="width: 25%"><b>Ling/Sist./Ferram.:</b></td><td><?php echo $item['cote_nm']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Descrição:</b></td><td><?php echo $item['cote_ds']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Nível de Conhecimento:</b></td><td><?php echo $item['cote_nico']; ?></td>
            </tr>
        </table>
        <br>
        <?php endforeach; ?>
        <h3 class="hidden-xs"><b>Escolaridade</b></h3>
        <h4 class="hidden-lg hidden-md hidden-sm"><b>Escolaridade</b></h4>
        <br>
        <?php foreach ($escolaridades as $item): ?>
        <table border="0 px solid" class="formato-tabela">
            <tr colspan="2">
                <td style="width: 25%"><b>Nome do Curso:</b></td><td><?php echo $item['esco_curso_nm']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Nome da Instituição:</b></td><td><?php echo $item['esco_inst_nm']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Duração:</b></td><td><?php echo $item['esco_dura']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Data de Início:</b></td><td><?php echo $item['esco_inic_dt']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Data de Término:</b></td><td><?php echo $item['esco_final_dt']; ?></td>
            </tr>
            <tr colspan="2">
                <td style="width: 25%"><b>Descrição:</b></td><td><?php echo $item['esco_ds']; ?></td>
            </tr>
        </table>
        <br>
        <?php endforeach; ?>
        <center><a href="#" class="btn btn-primary">Baixar PDF do Curriculum</a></center>
    </div>
</div>

