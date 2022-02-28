<?php

if($_POST){
    $operacao = $_POST["operacao"];

    if($operacao=="soma"){
        header("Location: soma.php");
    }

    if($operacao=="subtracao"){
        header("Location: subtracao.php");
    }

    if($operacao=="multiplicacao"){
        header("Location: multiplicacao.php");
    }

    if($operacao=="divisao"){
        header("Location: divisao.php");
    }
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

    <title>Calculadora da Thaís</title>
  </head>
  <body>
    <h1>Calculadora da Thaís</h1>
    <form method="post" action="index.php">
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Selecione a operação</label>
            </div>
            <div class="col-3">
                <select class="form-control" name="operacao" required>
                    <option value="">Selecione um opção</option>
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>
            </div>
            <div class="col-3">
                <button type="submit" class="btn btn-success">Calcular</button>
            </div>
        </div>
    </form>
  </body>
</html>





