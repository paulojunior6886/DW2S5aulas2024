<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Get</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <h1>Tabuada</h1>
    <hr>

    <form action="tabuada.php" method="get" onsubmit="return verificarNumero()">
        <div class="row">
            <label for="numero">Número:</label>
            <div class="col-2">
                <input type="number" id="num" name="num" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <button type="submit" id="calc" class="btn btn-success">Calcular</button>

                <a href="tabuada.php?num="><button type="button" id="reset" class="btn btn-warning" onclick="limparConteudo()">Limpar</button></a><br>
            </div>
        </div>

        <?php
        if (isset($_GET["num"]) && $_GET["num"] !== "") {
            $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_NUMBER_INT);
            echo "<div id='tabuada'><br><h2>Tabuada do $num</h2><br>";
            for ($i = 0; $i <= 10; $i++) {
                $tabu = $num * $i;
                echo "<p>$num * $i = $tabu</p>";
            }
            echo "</div>";
        }
        ?>

    </form>
    <script>
    function limparConteudo() {
      document.getElementById("tabuada").innerHTML = "";
      document.getElementById("tabuada").style.display = "none";
    }

    function verificarNumero() {
      var num = document.getElementById("num").value;
      if (num.trim() === "") {
        alert("Por favor, digite um número.");
        return false; // Impede o envio do formulário
      }
      return true; // Permite o envio do formulário
    }
  </script>

    <style>
        form {
            padding-left: 50px;
        }

        #num {
            margin-bottom: 20px;
        }

        button {
            margin-left: 14%;
        }
        h1{
            padding-left: 25px;
        }
    </style>

</body>

</html>
