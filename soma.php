<?php

if($_POST){

    $v1 = $_POST["valor1"];
    $v2 = $_POST["valor2"];

    $total = ($v1+$v2);

    echo "O resultado somando os dois valores é: ".$total;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculadora da Thaís - Somar</title>
  </head>
  <body>
    <h1>Calculadora da Thaís</h1>
    <form method="post" action="soma.php">
        <div class="row g-3 align-items-center">
            <div class="col-3">
                Valor1 <input type="text" name="valor1" required> 
                <br><br>
                Valor2 <input type="text" name="valor2" required>
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-success">Calcular</button>
            </div>
        </div>
    </form>
  </body>
</html>
</form>