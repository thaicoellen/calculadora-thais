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
<h1>Calculadora da Thaís</h1>

<form method="post" action="index.php">
    Selecione a operação
    <select name="operacao" required>
        <option value="">Selecione um opção</option>
        <option value="soma">Somar</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select>
    <input type="submit">
</form>