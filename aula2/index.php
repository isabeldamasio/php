<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Convertendo Temperaturas</title>
    </head>
    <body>
        <form method="post">
            <h1>Questão 3</h1>
            <label for="celsius">Digite a temperatura em graus Celcius:</label>
            <input type="number" id="tempCelsius" name="tempCelsius" step="0.01" required>
            <button type="submit" name="Converter_Para_Fahrenheit"> Converter Para Fahrenheit</button>
        </form>
        <form method="post">
            <h1>Questão 3</h1>
            <label for="fahrenheit">Digite a temperatura em graus Farenheit:</label>
            <input type="number" id="tempFahrenheit" name="tempFahrenheit" step="0.01" required>
            <button type="submit" name="Converter_Para_Celsius"> Converter Para Celsius</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){ //quando o formulario for do método post o servidor vai executar

                if(isset($_POST['Converter_Para_Fahrenheit'])){ //isset verifica se o valor recebido n é nulo
                    $celsius = $_POST['tempCelsius'];
                    $fahrenheit = ($celsius*9/5) + 32;
                    echo "$celsius ºC equivale à $fahrenheit ºF";
                }

                if(isset($_POST['Converter_Para_Celsius'])){ //isset verifica se o valor recebido n é nulo
                    $fahrenheit = $_POST['tempFahrenheit'];
                    $celsius = ($fahrenheit - 32) * 5/9;
                    echo "$fahrenheit ºF equivale à $celsius ºF";
                }

            }
        ?>
    </body>
</html>