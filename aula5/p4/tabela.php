<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h1{
            margin-left: 5%;
        }
        hr{
            margin-left: 5%;
            margin-right: 5%;
        }
        h3{
            margin-left: 5%;
        }
        td{
            text-align: center;
        }
    </style>

</head>
<body>
    <h1>Praticando 4 - Gerador de tabelas</h1>
    <hr>
   <?php 
// Função para gerar uma tabela HTML
function gerarTabela($linhas, $colunas, $estilo) {
    echo"<h3>Tabela $linhas x $colunas</h3>";
  echo "<table class='table $estilo' border='solid 2px black;' style='width: 90vw; margin-left: 5%;'>";
  for ($i = 0; $i < $linhas; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $colunas; $j++) {
      echo "<td>-</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
}

// Obter valores do formulário
$linhas = $_POST['linha'];
$colunas = $_POST['coluna'];
$estilo = $_POST['estilo'];

// Gerar a tabela
gerarTabela($linhas, $colunas, $estilo);

?> 
<a href="gerador.html">Voltar</a>
</body>
</html>
