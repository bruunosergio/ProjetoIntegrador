    <!-- Logout Modal-->
    <div class="modal fade" id="createColaborador" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Criar um novo colaborador:</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Preencha os dados abaixo para cadastrar um novo colaborador</p>
                    <form action="./partials/addColaborador.php" method="POST" id="mail_form">
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="nome_prof">Nome do Colaborador</label>
                                    <input type="text" class="form-control" id="nome_prof" aria-describedby="emailHelp" name="nome_prof" placeholder="Nome do Colaborador">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="cargo">Cargo</label>
                                    <input type="text" class="form-control" id="cargo" aria-describedby="cargo" name="cargo" placeholder="Cargo">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="contato">Contato/Whatsapp</label>
                                    <input type="contato" class="form-control" id="contato" name="contato" aria-describedby="emailHelp" placeholder="Contato/Whatsapp">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            <div class="col col-lg-6">    
                                <div class="form-group">
                                    <label for="email1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-12">
                                <div class="form-group">
                                        <label for="rg">RG</label>
                                        <input type="text" class="form-control" id="rg" name="rg" placeholder="Informe o RG">
                                        <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>

                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                            </div>
                            
                            <div class="col col-lg-6">
                                <div class="form-group">
                                    <label for="password1">Confirmação de Senha</label>
                                    <input type="password" class="form-control" id="password2" placeholder="Confirmação de Senha">
                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                </div>
                                <input type="text" name="status" value="1">
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