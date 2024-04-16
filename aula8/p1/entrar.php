<?php
session_start();

if (isset($_SESSION["user"])&& !empty($_SESSION["user"])){
  $_SESSION["erro"] = "Usuário já está autenticado.";
  header("Location: conteudo.php");
}
?>

<?php
require 'cabecalho.php';
?>


<section>
  <h1>Autenticação</h1>
  <?php if (isset($_SESSION["error"])): ?>
    <p class="error-message"><?php echo $_SESSION["error"]; ?></p>
    <p><a href="entrar.php">Clique aqui para voltar e reinserir as informações</a></p>
    <?php unset($_SESSION["error"]); ?>
  <?php endif; ?>
</section>

<form action="destino-entrar.php" method="post">
  <div>
    <div class="col-6">
      <label for="user" class="form-label">Usuário</label>
      <input type="text" class="form-control" id="user" name="user">
    </div>
    <div class="col-6">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha">
    </div>
  </div>
  <button type="submit" id="enviar" class="btn btn-primary">Entrar</button>
  <button type="reset" id="limpar" class="btn btn-warning">Limpar</button>
</form>

<style>
    section {
        background-color: aliceblue;
        text-align: center;
        padding: 2vw;
    }
    div{
        padding-left: 22%;
    }
    .error-message {
            color: red;
            font-weight: bold;
        }
        #enviar{
            text-align: center;
            margin-left: 39%;
            margin-top: 2%;
        }
        #limpar{
            text-align: center;
            margin-left: 2%;
            margin-top: 2%;
        }
</style>
</body>
</html>
