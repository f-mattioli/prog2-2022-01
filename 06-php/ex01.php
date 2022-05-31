<!DOCTYPE html>
<html>
    <head>
        <title>Superglobais</title>
    </head>

    <body>
        <h4>Exercício 01</h4>

        <p>Crie um script PHP que recebe um inteiro informado pelo usuário e apresenta
o dobro do inteiro.</p>

        <form method="post" action="ex01.php">
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
                $dobro = 2 * $numero;
                echo "<h4>O dobro de $numero é $dobro.</h4>";
            }
        }
        ?>
    </body>

</html>
