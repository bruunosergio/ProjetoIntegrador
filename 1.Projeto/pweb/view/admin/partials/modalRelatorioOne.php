    <!-- Logout Modal-->
    <?php include 'partials/data.php';?>
    <div class="modal fade" id="createRelatorioOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Relatório - Atividades de Enfermagem:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Preencha os dados abaixo para exportar um relatório personalizado:</p>
                    <form action="./partials/gerarPlanilhaOne.php" method="POST" id="mail_form">
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="periodo">Período</label>
                                    <select class="form-control" name="periodo" id="periodo">
                                        <option value="Janeiro a Junho" selected>Janeiro a Junho</option>
                                        <option value="Julho a Dezembro">Julho a Dezembro</option>
                                    </select> 
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="status">1- Ativo | 0- Inativo</label>
                                    <input type="text" class="form-control" id="status" aria-describedby="status" name="status" placeholder="Status" value="1">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                                </div>
                            </div>
                      </div>
                    
                      <div class="row">
                        <h6>-> Configuração de Data:</h6>
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="ano">Ano</label>
                                    <input type="number" class="form-control" id="ano" aria-describedby="ano" name="ano" placeholder="Ano" value="2022">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="nome_profissional">Nome do Colaborador</label>
                                    <select class="form-control" name="nome_profissional" id="nome_profissional">
                                    <?php
                                    $sql = "SELECT nome_prof FROM profissional";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {   
                                            echo "<option value=".$row['nome_prof'].">".$row['nome_prof']."</option>";        
                                        }
                                        } else {
                                            echo '<option value="Sem profissional cadastrado">Sem profissional cadastrado</option>';
                                    }                                            
                                    ?>
                                    </select> 
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                      </div>
                    
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Gerar</button>
                </div>

                

            </div>
            </form>
        </div>
    </div>