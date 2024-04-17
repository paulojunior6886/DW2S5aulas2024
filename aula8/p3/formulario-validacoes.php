<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Função para salvar cookies
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        // Função para obter cookies
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Função para preencher os campos do formulário com os dados dos cookies e exibir no console
        function fillFormFields() {
            var name = getCookie("name") || "";
            var telefone = getCookie("telefone") || "";
            var email = getCookie("email") || "";
            var cpf = getCookie("cpf") || "";
            var date = getCookie("date") || "";
            var cep = getCookie("cep") || "";

            console.log("Dados salvos:");
            console.log("name =", name);
            console.log("telefone =", telefone);
            console.log("email =", email);
            console.log("cpf =", cpf);
            console.log("date =", date);
            console.log("cep =", cep);

            document.getElementById("name").value = name;
            document.getElementById("telefone").value = telefone;
            document.getElementById("email").value = email;
            document.getElementById("cpf").value = cpf;
            document.getElementById("date").value = date;
            document.getElementById("cep").value = cep;
        }

        // Função para salvar dados dos campos nos cookies quando forem alterados
        function saveFormData() {
            setCookie("name", document.getElementById("name").value, 30);
            setCookie("telefone", document.getElementById("telefone").value, 30);
            setCookie("email", document.getElementById("email").value, 30);
            setCookie("cpf", document.getElementById("cpf").value, 30);
            setCookie("date", document.getElementById("date").value, 30);
            setCookie("cep", document.getElementById("cep").value, 30);
        }

        // Função para apagar todos os cookies
        function clearCookies() {
            var cookies = document.cookie.split("; ");
            for (var i = 0; i < cookies.length; i++) {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
            // Limpa os campos do formulário após apagar os cookies
            document.getElementById("name").value = "";
            document.getElementById("telefone").value = "";
            document.getElementById("email").value = "";
            document.getElementById("cpf").value = "";
            document.getElementById("date").value = "";
            document.getElementById("cep").value = "";
        }
    </script>
    <style>
        .image-container {
            text-align: right;
            margin-top: 25%;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body onload="fillFormFields()">

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Formulário -->
                <h1>Formulário de Cadastro</h1>
                <hr>
                <form id="form2" class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- Nome -->
                            <label for="name">Nome Completo:</label><br>
                            <input type="text" id="name" name="name" class="form-control" required
                                onkeyup="saveFormData()">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Telefone -->
                            <label for="telefone">Telefone</label>
                            <input type="tel" id="telefone" class="form-control" required="required" maxlength="15"
                                name="phone" placeholder="(xx)xxxxx-xxxx" title="(DD)xxxxx-xxxx"
                                pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" data-inputmask-mask="(xx)xxxxx-xxxx"
                                onkeyup="saveFormData()" />
                        </div>
                        <div class="col-md-6">
                            <!-- Email -->
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" required="required" class="form-control" name="email"
                                placeholder="Digite seu E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                onkeyup="saveFormData()" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <!-- CPF -->
                            <label for="cpf">CPF:</label>
                            <input type="text" id="cpf" name="cpf" class="form-control"
                                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx"
                                title="Digite seu CPF no formato: xxx.xxx.xxx-xx" required onkeyup="saveFormData()" />
                        </div>
                        <div class="col-md-3">
                            <!-- Data de Nascimento -->
                            <label for="date">Data de Nascimento:</label>
                            <input type="date" id="date" required="required" class="form-control" maxlength="10"
                                name="date" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1800-01-01" max="2024-02-28"
                                data-inputmask-inputformat="dd/mm/yyyy" onkeyup="saveFormData()" />
                        </div>
                        <div class="col-md-3">
                            <!-- CEP -->
                            <label for="cep">CEP:</label>
                            <input type="text" id="cep" required="required" class="form-control" maxlength="10"
                                name="cep" pattern="\d{2}\.\d{3}-\d{3}" placeholder="XX.XXX-XXX"
                                data-inputmask-inputformat="xx.xxx-xxx" title="Informe o CEP nesse formato: XX.XXX-XXX"
                                onkeyup="saveFormData()" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Botões -->
                            <br>
                            <input type="submit" class="btn btn-primary" value="Enviar" id="enviar"
                                onclick="sendData()">
                            <input type="button" class="btn btn-warning" value="Limpar" id="limpar"
                                onclick="clearCookies()">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <!-- Imagem -->
                <div class="image-container">
                    <img src="form.PNG" alt="Imagem de formulário">
                </div>
            </div>
        </div>
    </div>

</body>

</html>