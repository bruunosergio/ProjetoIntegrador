<?php include 'data.php';?>

<?php
$cpf       = $_POST['cpf'];
$contato   = $_POST['contato'];
$email     = $_POST['email'];
$status    = $_POST['status'];
$rg        = $_POST['rg'];
$nome_prof = $_POST['nome_prof'];
$senha     = $_POST['senha'];
$cargo     = $_POST['cargo'];


$sql = "INSERT INTO profissional (cpf, contato, email, status, rg, nome_prof, senha, cargo) VALUES ('".$cpf."', '".$contato."','".$email."','".$status."','".$rg."','".$nome_prof."','".$senha."','".$cargo."')";
$result = $conn->query($sql);
$conn->close();

header("Location: ../colaboradores.php", TRUE, 301);
exit();
?>