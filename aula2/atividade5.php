<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Δ </title>
        <link rel="stylesheet" href="../aula2/estilo.css" />
    </head>
    <body>
        <section id="principal">
            <div class="xis">
                <form method="post">
                    <a class="textos"> Vamos calcular a área de um triângulo?!</a>
                    <br>
                    <input type="number" name="base" placeholder="Digite aqui o valor da base do triângulo">
                    <input type="number" name="altura" placeholder="Digite aqui o valor da altura do triângulo">
                    <input type="submit" name="Enviar" value="Enviar"> 
                </form>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
                        if(isset($_POST['Enviar'])){ 
                            $base = $_POST['base'];
                            $altura = $_POST['altura'];
                            $area = $base*$altura/2;
                            echo "<br>";
                            echo "<a class = 'textos'> A área do triângulo é igual a $area </a>";
                            echo "<br>";
                        }
                        if ($area > 100){
                            echo "<a class = 'textos'> portanto, ela é maior que o valor limite </a>";
                        } elseif ($area == 100){
                            echo "<a class = 'textos'> portanto, ela é igual o valor limite </a>";
                        } else {
                            echo "<a class = 'textos'> portanto, ela é menor que o valor limite </a>";
                        }
                    }
                ?>
            </div>
        </section>
    </body>
</html>