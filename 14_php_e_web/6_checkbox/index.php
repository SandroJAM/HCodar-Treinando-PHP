<?php
  if(isset($_POST['ingrediente'])) {

    $ingrediente = $_POST['ingrediente'];

    print_r($ingrediente);

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <!-- Assim só vai imprimir o último valor COENTRO
            <input type="checkbox" name="ingrediente" value="Tomate"> Tomate
            Tem que colocar a sintaxe de array para se entendido que é um input multiplo valorado -->
            
            <input type="checkbox" name="ingrediente[]" value="Tomate"> Tomate
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Abódora"> Abóbora
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Feijão"> Feijão
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Alface"> Alface
        </div>
        <div>
            <input type="checkbox" name="ingrediente[]" value="Coentro"> Coentro
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>