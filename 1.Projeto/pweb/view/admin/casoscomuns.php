<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administração - Automação de Prontuários - Ifal - Casos Comuns</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'partials/sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar por..."
                                aria-label="Pesquisar" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <?php include 'partials/navbar.php';?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Casos Comuns</h1>
                    <p class="mb-4">Listagem de casos comuns,programas ou atividades</p>
                    
                    <!-- Opções de Action------------------------------------------------- -->
                    <!-- Color System -->
                    <div class="row">

                                <div class="col-lg-6 mb-4">
                                    <a class="card stretched-link bg-success text-white shadow" style="text-decoration:none" href data-toggle="modal" data-target="#createCasosComuns">
                                        <div class="card-body">
                                            + Novo Caso
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </a>
                                </div>
                                
                            
                                <div class="col-lg-6 mb-4">
                                    <a class="card stretched-link bg-dark text-white shadow" style="text-decoration:none" href>
                                        <div class="card-body">
                                            Filtragem
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                 
                    <!-- Opções de Action------------------------------------------------- -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Casos Comuns Cadastrados</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Caso Comum</th>
                                            <th>Status</th>
                                            <th>Prioridade</th>
                                            <th>Nível</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Caso Comum</th>
                                            <th>Status</th>
                                            <th>Prioridade</th>
                                            <th>Nível</th>
                                            <th>Ações</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php include 'partials/data.php';?>
                                    <?php
                                    $sql = "SELECT * FROM casoscomuns";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                            echo "<td>". $row["id"]. "</td>";
                                            echo "<td>". $row["casocomum"]. "</td>";
                                            echo "<td>". $row["status"]. "</td>";
                                            echo "<td>". $row["prioridade"]. "</td>";
                                            echo "<td>". $row["nivel"]. "</td>";
                                           
                                            echo "<td>
                                                  <a href='#editarCasoComum?idcasocomum=".$row["id"]."' title= 'Editar' data-toggle='modal' data-target='#editarCasoComum".$row["id"]."' class='btn btn-primary'><i class='fa-solid fa-pen'></i></a> 
                                                  <b>/</b> 
                                                  <a href='#desativar".$row["id"]."' title= 'Desativar' data-toggle='modal' data-target='#desativarCasoComum".$row["id"]."' class='btn btn-danger'><i class='fa-solid fa-toggle-off'></i></a>
                                                  </td>";
                                        echo '<tr>';
                                        
                                        // Editar Caso Comum
                                        echo '
                                        <div class="modal fade" id="editarCasoComum'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Editar um Caso Comum: <?php echo $idcasocomum ?></h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                
                                                <div class="modal-body">
                                                    <p>Preencha os dados abaixo para editar um  Caso Comum</p>
                                                    <form action="./partials/updateCasoComum.php?id='.$row["id"].'" method="PUT" id="mail_form'.$row["id"].'">
                                                    
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="casocomum">Nome do Caso Comum</label>
                                                                    <input type="text" class="form-control" id="casocomum" aria-describedby="emailHelp" name="casocomum" placeholder="Nome do Caso Comum" value='.$row["casocomum"].'>
                                                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                                                </div>
                                                            </div>
                                                            <div class="col col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="status">Status</label>
                                                                    <input type="text" class="form-control" id="status" aria-describedby="status" name="status" placeholder="Status" value='.$row["status"].'>
                                                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                
                                                        <div class="row">
                                                            <div class="col col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="prioridade">Prioridade</label>
                                                                    <input type="text" class="form-control" id="prioridade" name="prioridade" aria-describedby="prioridade" placeholder="Prioridade" value='.$row["prioridade"].'>
                                                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                                                </div>
                                                            </div>
                                                            <div class="col col-lg-6">    
                                                                <div class="form-group">
                                                                    <label for="nivel">Nível</label>
                                                                    <input type="text" class="form-control" id="nivel" name="nivel" aria-describedby="emailHelp" placeholder="Nível" value='.$row["nivel"].'>
                                                                    <small id="emailHelp" class="form-text text-muted">Informação Obrigatória <span style="color:red;">*</span></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                           
                                                </div>
                                
                                                </div>
                                
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                    <a class="btn btn-primary" href="#" onClick="document.getElementById("mail_form'.$row["id"].'").submit();" >Atualizar</a>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>';

                                    // Desativar caso comum
                                    echo '
                                    <div class="modal fade" id="desativarCasoComum'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Desativar Caso Comum?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Selecione "Desativar" para desativar o caso comum <br>"<i><b>'.$row['casocomum'].'</b></i>".</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                    <a class="btn btn-primary" href="logout.php">Desativar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';

                                    }
                                    } else {
                                        echo '<tr>';
                                            echo "<td>Sem casos comuns</td>";
                                            echo "<td>Sem casos comuns</td>";
                                            echo "<td>Sem casos comuns</td>";
                                            echo "<td>Sem casos comuns</td>";
                                            echo "<td>Sem casos comuns</td>";
                                            echo "<td>Sem casos comuns</td>";
                                        echo '<tr>';
                                    }

                                    $conn->close();
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include 'partials/footer.php';?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php include 'partials/logoutModal.php';?>
    <?php include 'partials/createCasosComuns.php';?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>