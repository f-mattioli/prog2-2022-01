<!DOCTYPE html>
<html>
    <head>
        <title>Superglobais</title>
    </head>

    <body>
        <h4>Exercício 01</h4>

        <p>Crie um script PHP que recebe um inteiro informado pelo usuário e apresenta
"PAR" ou "ÍMPAR" de acordo com o número informado.</p>

        <form method="post" action="ex02.php">
            Número: <input type="number" name="num" />
            <br><br>

            <input type="submit" value="Enviar" />
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['num'];

            if (empty($numero)) {
                echo "<h4>É necessário informar um número.</h4>";
            } else {
                if ($numero % 2 == 0) {
                    echo "<h4>O número $numero é PAR.</h4>";
                } else {
                    echo "<h4>O número $numero é ÍMPAR.</h4>";
                }
            }
        }
        ?>
    </body>

</html>
