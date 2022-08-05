    <!-- Logout Modal-->
    <div class="modal fade" id="createPaciente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Criar um novo paciente:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Preencha os dados abaixo para cadastrar um novo paciente</p>
                    <form action="./partials/addPaciente.php" method="POST" id="mail_form">
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="nome_paciente">Nome do Paciente</label>
                                    <input type="text" class="form-control" id="nome_prof" aria-describedby="emailHelp" name="nome_paciente" placeholder="Nome do Paciente" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="tipo">Tipo Paciente</label>
                                    <input type="text" class="form-control" id="tipo" aria-describedby="cargo" name="tipo" placeholder="Tipo do Paciente" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="turma_paciente">Turma Paciente</label>
                                    <input type="text" class="form-control" id="turma_paciente" name="turma_paciente" aria-describedby="emailHelp" placeholder="Turma Paciente">
                                </div>
                            </div>
                            <div class="col col-lg-6">    
                                <div class="form-group">
                                    <label for="curso_paciente">Curso Paciente</label>
                                    <input type="text" class="form-control" id="curso_paciente" name="curso_paciente" aria-describedby="emailHelp" placeholder="Curso Paciente">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="cargo">Cargo</label>
                                    <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo" autocomplete="off">
                                </div>
                            </div>

                            <div class="col col-lg-12">
                                <div class="form-group">
                                        <label for="data_nascimento">Data de Nascimento</label>
                                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento">
                                        <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="status_paciente">Status do Paciente</label>
                                    <input type="text" class="form-control" id="status_paciente" name="status_paciente" value="1" placeholder="Status do Paciente">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="rg">RG</label>
                                    <input type="text" class="form-control" id="rg" name="rg" placeholder="RG" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" autocomplete="off">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="matricula">Matrícula</label>
                                    <input type="text" class="form-control" id="cpf" name="matricula" placeholder="Nº Matrícula" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off">
                                </div>
                            </div>

                            <div class="col col-lg-12">
                                <div class="form-group">
                                        <label for="contato">Contato</label>
                                        <input type="text" class="form-control" id="contato" name="contato" placeholder="Contato">
                                        <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="nome_pai">Nome do Pai</label>
                                    <input type="text" class="form-control" id="nome_pai" name="nome_pai" placeholder="Status do Paciente">
                                </div>
                            </div>
                            
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="contato_pai">Contato do Pai</label>
                                    <input type="text" class="form-control" id="contato_pai" name="contato_pai" placeholder="Contato do Pai" autocomplete="off">
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="nome_mae">Nome Mãe</label>
                                    <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Nome da Mãe" autocomplete="off">
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="contato_mae">Contato Mãe</label>
                                    <input type="text" class="form-control" id="contato_mae" name="contato_mae" placeholder="Contato da Mãe" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        
                </div>

                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="#" onClick="document.getElementById('mail_form').submit();" >Criar</a>
                </div>

                

            </div>
            </form>
        </div>
    </div>