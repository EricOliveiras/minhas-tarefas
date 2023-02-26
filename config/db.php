<?php 

$host = "localhost";
$db = "minhas_tarefas";
$user = "root";
$pass = "";

try {
  $connection = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $erro) {
  $error = $erro->getMessage();
  echo "Erro: $error";
}