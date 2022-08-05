    <?php include 'partials/data.php';?>
    <!-- Logout Modal-->
    <div class="modal fade" id="createConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document"> <!--modal-lg -->
            <div class="modal-content">
                <div class="modal-header">
                    <img src="img/ifal.png" width="270px" height="187px" style="position:absolute; left:870px; bottom: 60px;" alt="Ifal Logo">
                    <h5 class="modal-title" id="exampleModalLabel">Criar uma nova consulta:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Preencha os dados abaixo para cadastrar uma nova consulta</p>
                    <form action="./partials/addConsulta.php" method="POST" id="mail_form">
                    
                    <div class="container-fluid">
                          
                        <div class="row">
                        <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="data_consulta">Data da Consulta</label>
                                    <input type="date" class="form-control" id="data_consulta" aria-describedby="emailHelp" name="data_consulta" placeholder="Data da Consulta" required autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="hora_consulta">Hora da Consulta</label>
                                    <input type="time" class="form-control" id="hora_consulta" required aria-describedby="hora_consulta" name="hora_consulta" placeholder="Hora da Consulta" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="nome_profissional">Nome do Profissional [ Atendimento ]</label>
                                    <select class="form-control" name="nome_profissional" id="nome_profissional">  
                                        <option value="Selecionar Profissional" disabled selected>Selecionar Profissional</option>
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
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="nome_paciente">Nome do Paciente</label>
                                    <!--<input type="text" class="form-control" id="nome_paciente" required aria-describedby="emailHelp" name="nome_paciente" placeholder="Nome do Paciente" autocomplete="off"> -->
                                    
                                    <select class="form-control" name="nome_paciente" id="nome_paciente">  
                                        <option value="Selecionar Paciente" disabled selected>Selecionar paciente</option>
                                        <?php
                                            $sql = "SELECT * FROM paciente";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {   
                                                    echo "<option value=".$row['nome_paciente'].">".$row['nome_paciente']."</option>";        
                                                }
                                                } else {
                                                    echo '<option value="Sem paciente cadastrado">Sem paciente cadastrado</option>';
                                            }

                                        ?>
                                    </select>
                                    
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="curso">Curso</label>
                                    <input type="text" class="form-control" id="curso" aria-describedby="curso" name="curso" placeholder="Curso do Paciente" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="turma">Turma/Período/Série</label>
                                    <input type="contato" class="form-control" id="turma" name="turma" aria-describedby="emailHelp" placeholder="Turma" autocomplete="off">
                                </div>
                            </div>
                            <div class="col col-lg-6">    
                                <div class="form-group">
                                    <label for="matricula">Matrícula</label>
                                    <input type="email" class="form-control" id="matricula" name="matricula" aria-describedby="emailHelp" placeholder="Matrícula" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="pa">P.A [Pressão Arterial]</label>
                                    <input type="text" class="form-control" id="pa" name="pa" placeholder="Informe a pressão arterial" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-12">
                                <div class="form-group">
                                        <label for="fr">F.R [Frequência Respiratória]</label>
                                        <input type="text" class="form-control" id="fr" name="fr" placeholder="Informe a Frequência Respiratória" autocomplete="off">
                                        <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="fc">F.C [Frequência Cardíaca]</label>
                                    <input type="text" class="form-control" id="fc" name="fc" placeholder="Informe a Frequência Cardíaca" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="t">T [Temperatura]</label>
                                    <input type="text" class="form-control" id="t" name="t" placeholder="Informe a Temperatura" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="spo2">SpO2 [Saturação SpO2]</label>
                                    <input type="text" class="form-control" id="spo2" name="spo2" placeholder="Informe a Saturação SpO2" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                        </div>
                        <hr style="font-weight: bold;">
                        <div class="row">

                            <div class="col col-lg-12">
                                    <label for="sintomas">Sintomas</label>
                                    <input type="text" class="form-control" id="sintomas" name="sintomas" autocomplete="off"> 
                            </div>

                            <div class="col col-lg-12">
                                    <label for="estado">Estado em que chegou</label>
                                    <select class="form-control" name="estado" id="causasoptions">
                                        <option value="Acordado" selected>Acordado</option>
                                        <option value="Desacordado">Desacordado</option>
                                        <option value="Meio Acordado">Meio Acordado</option>
                                        <option value="Tonto">Tonto</option>
                                    </select> 
                            </div>

                            <div class="col col-lg-12">
                                    <label for="causasinput">Causas Comuns/Programas/Atividades</label>
                                    <!--<input type="text" class="form-control" id="causasinput" name="causasinput" autocomplete="off">-->
                                    <select class="form-control" name="causasoptions" id="causasoptions" multiple>
                                        <?php
                                            $sql = "SELECT * FROM casoscomuns";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {   
                                                    echo "<option value=".$row['casocomum'].">".$row['casocomum']."</option>";        
                                                }
                                                } else {
                                                    echo '<option value="Sem casos comuns cadastrados</option>';
                                            }

                                            $conn->close();
                                        ?>
                                    </select> 
                            </div>

                            <div class="col col-lg-12">
                                    <label for="evolucaoanotenf">Evolução / Anotações da Enfermagem</label>
                                    <textarea name="evolucaoanotenf" class="form-control" tabindex="6" placeholder="Digite a Evolução e Anotações da Enfermagem" autocomplete="off" required></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                            </div>
                            <div class="col col-lg-6">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" value="Em Atendimento" autocomplete="off"> <!-- Marcadas, Pendentes, Em Atendimento, Concluídas -->
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                            </div>
                        </div>
                </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="#" onClick="document.getElementById('mail_form').submit();" >Cadastrar Consulta</a>
                </div>

                

            </div>
            </form>
        </div>
    </div>