
    <style>
        .title {
            background-color: aliceblue;
            text-align: center;
            padding-top: 25px;
            padding-bottom: 25px;
            margin-bottom: 15px;
        }

        .info {
            background-color: azure;
            padding-left: 60px;
        }
    </style>
    <!--Cabeçalho-->
    <?php
    require 'cabecalho.php';
    ?>

</head>

<body>
    <div class="title">
        <h2>Formulário para contato</h2>
    </div>

    <div class="info">
        <?php
        // Verifica se o formulário foi enviado
       /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtém os dados do formulário
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $mensagem = $_POST["mensagem"];

            // Obtém a data e hora atual
            $dataHora = date("Y-m-d H:i:s");

            // Cria uma string com os dados formatados
            //$dados = "Contato via site: \n";
            $dados = "Contato via site:\n\nData/Hora: $dataHora \n";
            $dados .= "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n -----------------------------------------------------------------------------------------------------------------";
            //$dados = "----------------------------";
        
            // Define o nome do arquivo 
            $arquivo = "contato_" . date("YmdHis") . ".txt";

            // Abre o arquivo para escrita
            $handle = fopen($arquivo, "w");

            // Escreve os dados no arquivo
            fwrite($handle, $dados);

            // Fecha o arquivo
            fclose($handle);


            echo "<p>Nome Informado: $nome</p>";
            echo "<p>E-mail: $email </p>";
            echo "<p>Mensagem: $mensagem</p>";
            echo "<p>Data/Hora de Envio: $dataHora</p>";
        } else {
            // Se não houver envio via POST, redireciona para o formulário
            header("Location: contato.php");
            exit();
        }*/
        


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Obtém a data e hora atual
    $dataHora = date("d-m-Y H.i.s");
    //date("Y-m-d H:i:s");

    // Cria uma string com os dados formatados
    $dados = "Contato via site:\n\nData/Hora: $dataHora \n";
    $dados .= "Nome: $nome\nEmail: $email\nMensagem: $mensagem\n\n-----------------------------------------------------------------------------------------------------------------------";

    // Define o caminho completo do arquivo
    $caminhoArquivo = 'contatos/';

    // Verifica se a pasta contatos existe, senão cria
    if (!file_exists($caminhoArquivo)) {
        mkdir($caminhoArquivo, 0777, true);
    }

    // Define o nome do arquivo 
    $arquivo = $caminhoArquivo . "contato_" . date("d-m-Y H.i.s") . ".txt";

    // Escreve os dados no arquivo
    file_put_contents($arquivo, $dados);

    // Exibe os dados salvos
   
    echo "<div class='info'>";
    echo "<p>Nome Informado: $nome</p>";
    echo "<p>E-mail: $email </p>";
    echo "<p>Mensagem: $mensagem</p>";
    echo "<p>Data/Hora de Envio: $dataHora</p>";
    echo "</div>";
} else {
    // Se não houver envio via POST, redireciona para o formulário
    header("Location: contato.php");
    exit();
}

?>

        
    </div>

<a href="contato.php">Voltar ao formulário</a>
<!--Rodapé-->
<?php
require 'rodape.php';
?>

