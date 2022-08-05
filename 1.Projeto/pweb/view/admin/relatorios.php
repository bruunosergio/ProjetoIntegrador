<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administração - Automação de Prontuários - Ifal - Relatórios</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Relatórios</h1>
                    <p class="mb-4">Emissão de Relatórios nos formatos propostos.</p>
                    
                    <!-- Opções de Action------------------------------------------------- -->
                    <!-- Color System -->
                    <div class="row">

                                <div class="col-lg-6 mb-4">
                                    <a class="card stretched-link bg-success text-white shadow" style="text-decoration:none" href data-toggle="modal" data-target="#createRelatorioOne">
                                        <div class="card-body">
                                            + Exportar Relatório - Registro das Atividades de Enfermagem [.XLSX] -> Excel
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </a>
                                </div>

                                <!--<div class="col-lg-6 mb-4">
                                    <a class="card stretched-link bg-primary text-white shadow" style="text-decoration:none" href data-toggle="modal" data-target="#createRelatorioTwo">
                                        <div class="card-body">
                                            + Exportar Relatório - Estudantes Atendidos [.XLSX] -> Excel 
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </a>
                                </div>-->

                    </div>

                 
                    <!-- Opções de Action------------------------------------------------- -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registro de Exportações</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Período</th>
                                            <th>Ano</th>
                                            <th>Status</th>
                                            <th>Profissional</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Período</th>
                                            <th>Ano</th>
                                            <th>Status</th>
                                            <th>Profissional</th>
                                            <th>Ações</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                    <?php include 'partials/data.php';?>
                                    <?php
                                    $sql = "SELECT * FROM relatorio";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                            echo "<td>". $row["id"]. "</td>";
                                            echo "<td>". $row["periodo"]. "</td>";
                                            echo "<td>". $row["ano"]. "</td>";
                                            echo "<td>". $row["status"]. "</td>";
                                            echo "<td>". $row["nome_profissional"]. "</td>";
                                            echo "<td><button type='button' title= 'Editar' class='btn btn-primary'><i class='fa-solid fa-pen'></i></button> <b>/</b> <button type='button' title= 'Desativar' class='btn btn-danger'><i class='fa-solid fa-toggle-off'></i></button></td>";
                                        echo '<tr>';
                                    }
                                    } else {
                                        echo '<tr>';
                                            echo "<td>Sem exportações cadastradas</td>";
                                            echo "<td>Sem exportações cadastradas</td>";
                                            echo "<td>Sem exportações cadastradas</td>";
                                            echo "<td>Sem exportações cadastradas</td>";
                                            echo "<td>Sem exportações cadastradas</td>";
                                            echo "<td>Sem exportações cadastradas</td>";
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
    <?php include 'partials/modalRelatorioOne.php';?>
    <?php include 'partials/modalRelatorioTwo';?>

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