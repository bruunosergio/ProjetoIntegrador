<?php include 'data.php';?>

<?php
$data_consulta       = $_POST['data_consulta'];
$hora_consulta       = $_POST['hora_consulta'];
$nome_profissional   = $_POST['nome_profissional'];
$nome_paciente       = $_POST['nome_paciente'];
$curso               = $_POST['curso'];
$turma               = $_POST['turma'];
$matricula           = $_POST['matricula'];
$pa                  = $_POST['pa'];
$fr                  = $_POST['fr'];
$fc                  = $_POST['fc'];
$t                   = $_POST['t'];
$spo2                = $_POST['spo2'];
$sintomas            = $_POST['sintomas'];
$estado              = $_POST['estado'];
$causasoptions       = $_POST['causasoptions'];
$evolucaoanotenf     = $_POST['evolucaoanotenf'];
$status              = $_POST['status'];

$sql = "INSERT INTO consulta (data_consulta,hora_consulta,nome_profissional,nome_paciente, curso, turma, matricula, pa, fr, fc, t,spo2,sintomas,estado,causasoptions,evolucaoanotenf,status) VALUES ('".$data_consulta."','".$hora_consulta."','".$nome_profissional."','".$nome_paciente."', '".$curso."','".$turma."','".$matricula."','".$pa."','".$fr."','".$fc."','".$t."','".$spo2."','".$sintomas."','".$estado."','".$causasoptions."','".$evolucaoanotenf."','".$status."')";

$result = $conn->query($sql);
$conn->close();

header("Location: ../consultas.php", TRUE, 301);
exit();
?>