<!DOCTYPE html>
<html>
    <head>
        <title>Superglobais</title>
    </head>

    <body>
        <h4>Teste de requisições POST</h4>

        <form method="post" action="test.php">
            Nome: <input type="text" name="nome" />
            <br><br>

            Email: <input type="email" name="email" />
            <br><br>

            <input type="submit" value="Enviar" />
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            if (empty($nome) || empty($email)) {
                echo "<h4>É necessário preencher todos os campos.</h4>";
            } else {
                echo "<h4>Olá $nome! Seu email é $email.</h4>";
            }
        }
        ?>
    </body>

</html>
