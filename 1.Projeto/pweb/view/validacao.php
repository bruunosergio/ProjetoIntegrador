<?php
 // Tenta se conectar ao servidor MySQL
 mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
 // Tenta se conectar a um banco de dados MySQL
 mysql_select_db('projetopesquisa') or trigger_error(mysql_error());

 $cpf = mysql_real_escape_string($_POST['cpf']);
 $senha = mysql_real_escape_string($_POST['senha']);

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['cpf']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  // Validação do usuário/senha digitados
$sql = "SELECT `id`, FROM `usuarios` WHERE (`cpf` = '".$cpf ."') AND (`senha` = '". sha1($senha) ."') ";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
echo "Login inválido!"; exit;
    } else {
// Salva os dados encontados na variável $resultado
$resultado = mysql_fetch_assoc($query);
    }

  ?>