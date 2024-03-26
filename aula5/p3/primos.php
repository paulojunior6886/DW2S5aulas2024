<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números primos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        a {
            padding-right: 50px;
        }
        #positivo{
            background-color: lightgreen;
            border: 2px solid green;
            padding: 5px;
            font-size: x-large;
        }
        #nao{
            background-color: lightcoral;
            border: 2px solid red;
            padding: 5px;
            font-size: x-large;
        }
    </style>
</head>

<body>

    <h1>Praticando 3 - Números primos</h1>
    <hr>
    <div class="row" action="primos.php" method="GET">
        <div class="col">
            <a href="primos.php?numero=1" name="numero" value="1">Número 1</a>
        </div>
        <div class="col">
            <a href="primos.php?numero=2" name="numero" value="2">Número 2</a>
        </div>
        <div class="col">
            <a href="primos.php?numero=3" name="numero" value="3">Número 3</a>
        </div>
        <div class="col">
            <a href="primos.php?numero=5" name="numero" value="5">Número 5</a>
        </div>
        <div class="col">
            <a href="primos.php?numero=20" name="numero" value="20">Número 20</a>
        </div>
        <div class="col">
            <a href="primos.php?numero=32" name="numero" value="32">Número 32</a>
        </div>
        <div class="col">
            <a href="primos.php?numero=37" name="numero" value="37">Número 37</a>
        </div>
    </div><br>

    <?php

    // Função para verificar se um número é primo
    function ehPrimo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false;
            }
        }
        return true;
    }

    // Definir a variável que recebe o número via GET
    $numero = $_GET['numero'];

    // Verificar se o número foi recebido
    if (!isset($numero)) {
        echo "<p class='text-center'>Nenhum número foi selecionado. Escolha um número clicando nos links acima.</p>";
        exit;
    }

    // Testar se o número é primo e par ou ímpar
    $primo = ehPrimo($numero);
    $par = $numero % 2 === 0;

    // Gerar a mensagem final
    $mensagem = "<p class='text-center'>";
    if ($primo) {
        $mensagem .= "O número <span id=positivo>$numero</span> <span id=positivo>é</span> um número <span id=positivo>PRIMO</span>.";
    if ($par) {
        $mensagem .= " Além disso, ele é um número <span id=positivo>PAR</span>.";
    } else {
        $mensagem .= " Além disso, ele é um número <span id=positivo>ÍMPAR</span>.";
    }
} else {
        $mensagem .= "O número <span id=nao>$numero</span> <span id=nao>não</span> é um número <span id=nao>primo</span>.";
        if ($par) {
            $mensagem .= " Além disso, ele é um número <span id=nao>PAR</span>.";
        } else {
            $mensagem .= " Além disso, ele é um número <span id=nao>ÍMPAR</span>.";
        }
    }
    
    $mensagem .= "</p>";

    ?>

    <div class="row">
        <?php echo $mensagem; ?>
    </div>

</body>

</html>