<?php

if($_POST){

    $v1 = $_POST["valor1"];
    $v2 = $_POST["valor2"];

    if($v1 < $v2){
        echo "valor 1 precisa ser igual ou menor valor 2";
        exit;
    }

    $total = ($v1-$v2);


    echo "O resultado somando os dois valores é: ".$total;
}

?>
<h1>Calculadora da Thaís (Subitrair)</h1>

<form method="post" action="subtracao.php">
    Valor1<input type="text" name="valor1" required>
    Valor2<input type="text" name="valor2" required>
    <input type="submit" value="Subitrair">
</form>
