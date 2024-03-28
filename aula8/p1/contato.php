    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <!--Cabeçalho-->
    <?php
    require 'cabecalho.php';
    ?>
    <style>
        form {
            margin-left: 25%;
        }

        .title {
            background-color: aliceblue;
            text-align: center;
            padding-top: 25px;
            padding-bottom: 25px;
            margin-bottom: 15px;
        }
        button{
            text-align: center;
            margin-top: 1vw;
            margin-left: 16vw;
        }
    </style>
</head>

<body>

    <div class="title">
        <h2>Formulário para contato</h2>
    </div>

    <form action="destino-contato.php" method="POST">
        <div class="row">
            <div class="col-4">
                <label for="nome" class="form-label">Nome:</label>
                <input type="name" name="nome" class="form-control" id="nome" required>
            </div>
            <div class="col-4">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" require>
            </div>
        </div>
        <div class="col-8">
            <label for="mensagem" class="form-label">Mensagem:</label>
            <textarea class="form-control" name="mensagem" id="mensagem" rows="3" require></textarea>
        </div>
        <div class="row">
            <div class="col-1">
                <button type="submit" class="btn btn-primary">Enviar</button>

            </div>
            <div class="col-1">
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>
    </form>

<!--Rodapé-->
<?php
require 'rodape.php';
?>

