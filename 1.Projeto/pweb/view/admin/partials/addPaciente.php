<?php include 'data.php';?>

<?php
$nome_paciente       = $_POST['nome_paciente'];
$tipo                = $_POST['tipo'];
$turma_paciente      = $_POST['turma_paciente'];
$curso_paciente      = $_POST['curso_paciente'];
$cargo               = $_POST['cargo'];
$data_nascimento     = $_POST['data_nascimento'];
$status_paciente     = $_POST['status_paciente'];
$rg                  = $_POST['rg'];
$cpf                 = $_POST['cpf'];
$matricula           = $_POST['matricula'];
$email               = $_POST['email'];
$contato             = $_POST['contato'];
$nome_pai            = $_POST['nome_pai'];
$contatopai          = $_POST['contato_pai'];
$nome_mae            = $_POST['nome_mae'];
$contatomae          = $_POST['contato_mae'];

$sql = "INSERT INTO paciente (nome_paciente, tipo, turma_paciente, curso_paciente, cargo, data_nascimento, status_paciente, rg, cpf,matricula,email,contato,nome_pai,contatopai,nome_mae,contatomae) VALUES ('".$nome_paciente."', '".$tipo."','".$turma_paciente."','".$curso_paciente."','".$cargo."','".$data_nascimento."','".$status_paciente."','".$rg."','".$cpf."','".$matricula."','".$email."','".$contato."','".$nome_pai."','".$contatopai."','".$nome_mae."','".$contatomae."')";
$result = $conn->query($sql);
$conn->close();

header("Location: ../pacientes.php", TRUE, 301);
exit();
?>