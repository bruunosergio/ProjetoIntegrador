<?php include 'data.php';?>

<?php
$id              = $_GET['id'];
$casocomum       = $_PUT['casocomum'];
$status          = $_PUT['status'];
$prioridade      = $_PUT['prioridade'];
$nivel           = $_PUT['nivel'];


$sql = "UPDATE casoscomuns SET casocomum = '".$casocomum."', status = '".$status."', prioridade = '".$prioridade."', nivel = '".$nivel."' WHERE id = '".$id."'";
$result = $conn->query($sql);
$conn->close();

header("Location: ../casoscomuns.php", TRUE, 301);
exit();
?>