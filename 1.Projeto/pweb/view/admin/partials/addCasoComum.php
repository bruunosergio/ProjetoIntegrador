<?php include 'data.php';?>

<?php
$casocomum       = $_POST['casocomum'];
$status          = $_POST['status'];
$prioridade      = $_POST['prioridade'];
$nivel           = $_POST['nivel'];


$sql = "INSERT INTO casoscomuns (casocomum, status, prioridade, nivel) VALUES ('".$casocomum."', '".$status."','".$prioridade."','".$nivel."')";
$result = $conn->query($sql);
$conn->close();

header("Location: ../casoscomuns.php", TRUE, 301);
exit();
?>