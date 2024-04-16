<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if (!isset($_SESSION["user"]) || empty($_SESSION["user"])) {
    $_SESSION["erro"] = "Você está tentando acessar conteúdo restrito.";
    header("Location: conteudo.php");
}
?>

<?php
require 'cabecalho.php';
?>


<section>
    <h1>Autenticação</h1>

</section>

<div class="perfil">
    <p>Nome: <b>Paulo Junior</b></p>
    <p>E-mail: <b>paulojunior6886@gmail.com</b></p>
    <p>Telefone: <b>(17)99648-4263</b></p>
    <p>Nome: <b>Paulo Junior</b></p>
    <p>Endereço: <b>Limmatquai nº55</b></p>
    <p>Cidade: <b>Zurique</b></p>
    <p>Estado: <b>Cantão de Zurique</b></p><!--Se diz assim mesmo pelo que pesquisei kk-->
</div>


<style>
    section {
        background-color: aliceblue;
        text-align: center;
        padding: 2vw;
    }

    div {
        padding-left: 22%;
    }

    .perfil {
        font-size: x-large;
    }
</style>
</body>

</html>