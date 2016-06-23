
<div class="panel panel-success" style="margin-top: 100px;">
        
        <div class="panel-heading"><b>Informações Gerais de Proprietário e Veículo</b></div>
        <div class="panel-body">
            
             <div class="row">
                <div class="form-group col-md-6">
                    <h4>Proprietário</h4>
                    <table border="0px">
                        <tr>
                            <td width="100px"><label>Código:</label></td><td><?php echo $dados['id']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Nome:</label></td><td><?php echo $dados['nome']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Sobrenome:</label></td><td><?php echo $dados['sobrenome']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>CPF:</label></td><td><?php echo $dados['cpf']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>CNH:</label></td><td><?php echo $dados['cnh']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Endereço:</label></td><td><?php echo $dados['endereco']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Telefone:</label></td><td><?php echo $dados['telefone']; ?></td>
                        </tr>
                    </table>
                </div>
                 <div class="form-group col-md-6">
                    <h4>Automóvel</h4>
                  <table border="0px">
                        <tr>
                            <td width="100px"><label>Placa:</label></td><td><?php echo $dados['placa']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Modelo:</label></td><td><?php echo $dados['modelo']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Marca:</label></td><td><?php echo $dados['marca']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Ano:</label></td><td><?php echo $dados['ano']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Cor:</label></td><td><?php echo $dados['cor']; ?></td>
                        </tr>
                        <tr>
                            <td width="100px"><label>Chassi:</label></td><td><?php echo $dados['chassi']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>

            
        </div>
    </div>


