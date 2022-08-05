    <!-- Logout Modal-->
    <div class="modal fade" id="createRelatorioTwo" tabindex="-1" role="dialog" aria-labelledby="createRelatorioTwo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Relatório - Estudantes Atendidos:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Preencha os dados abaixo para exportar um relatório personalizado:</p>
                    <form action="./partials/addCasoComum.php" method="POST" id="mail_form">
                    
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
                                    <label for="status">Status 1- Ativo/0- Inativo</label>
                                    <input type="text" class="form-control" id="status" aria-describedby="status" name="status" placeholder="Status" value="1">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="prioridade">Prioridade</label>
                                    <!--<input type="text" class="form-control" id="prioridade" name="prioridade" aria-describedby="prioridade" placeholder="Prioridade">-->
                                    <select class="form-control" name="prioridade" id="prioridade">
                                        <option value="Baixa" selected>Baixa</option>
                                        <option value="Média">Média</option>
                                        <option value="Alta">Alta</option>
                                    </select> 
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">    
                                <div class="form-group">
                                    <label for="nivel">Nível - 1 a 5</label>
                                    <!--<input type="text" class="form-control" id="nivel" name="nivel" aria-describedby="emailHelp" placeholder="Nível">-->
                                    <select class="form-control" name="nivel" id="nivel">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select> 
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
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