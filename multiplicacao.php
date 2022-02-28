
<?php

if($_POST){

    $v1 = $_POST["valor1"];
    $v2 = $_POST["valor2"];

    $total = ($v1*$v2);

    echo "O resultado multiplicando os dois valores é: ".$total;
}

?>

<h1>Calculadora da Thaís (Multiplicar)</h1>

<form method="post" action="multiplicacao.php">
    Valor1<input type="text" name="valor1" required>
    Valor2<input type="text" name="valor2" required>
    <input type="submit" value="Multiplicar">
</form>