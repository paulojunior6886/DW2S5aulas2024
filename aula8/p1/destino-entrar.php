<?php
session_start();

$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

if ($user == "paulojr") {
  if ($senha == "senha_da_nasa") {
    $_SESSION["user"] = $user;
    header("location: conteudo.php");
    exit(); // Importante: Encerra o script após redirecionar o usuário
  } else {
    $_SESSION["error"] = "FALHA AO EFETUAR AUTENTICAÇÃO <br> A senha informada está incorreta <br> Verifique as informações e tente novamente";
    header("location: entrar.php"); // Redireciona de volta para a página de login
    exit(); // Encerra o script após redirecionamento
  }
} else {
  $_SESSION["error"] = "FALHA AO EFETUAR AUTENTICAÇÃO <br> Usuário não encontrado. <br> Verifique as informações e tente novamente";
  header("location: entrar.php"); // Redireciona de volta para a página de login
  exit(); // Encerra o script após redirecionamento
}
?>
