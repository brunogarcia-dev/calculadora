<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h1>Calculadora Especial</h1>
    </header>
    <section>
        <div>
            <?php
                $alt = 0;
                $soma = 0;
                while ($alt <= $quant) {
                    $soma = $_POST["'altura'.$alt"];
                    $alt++;
                    echo $soma;
                }
                
            ?>
        </div>
    </section>
    <footer>
        <p>&copy; Bruno Garcia</p>
    </footer>
</body>
</html>