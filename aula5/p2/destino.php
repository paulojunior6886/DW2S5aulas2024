<?php
if (isset($_POST['inicio'], $_POST['final'], $_POST['incremento'])) {
  $inicio = $_POST['inicio'];
  $final = $_POST['final'];
  $incremento = $_POST['incremento'];

  // Verificação da ordem dos números
  if ($inicio > $final) {
    $ordem = -1;
  } else {
    $ordem = 1;
  }

  echo "<h1>Contador</h1><hr>";
  echo "<h2>Parâmetros Informados</h2>";
  echo "<p>Inicio: $inicio</p>";
  echo "<p>Final: $final</p>";
  echo "<p>Incremento: $incremento</p>";

  // Tabela
  echo "<table class='table table-bordered'>";
  echo "<thead>";
  echo "<tr>";
  echo "<th>Números</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";

  for ($i = $inicio; $i * $ordem <= $final * $ordem; $i += $incremento * $ordem) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
}
?>