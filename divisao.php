<?php

if($_POST){

    $v1 = $_POST["valor1"];
    $v2 = $_POST["valor2"];

    if($v1 < $v2){
        echo "O valor 1 precisa ser maior ou igual ao valor 2 <br>"; 
        echo "O valor 1 é: ".$v1." <br>";
        echo "O valor 2 é: ".$v2." <br>";
        exit;
    }
    $total = ($v1/$v2);

    echo "O resultado somando os dois valores é: ".$total;
}

?>
<h1>Calculadora da Thaís (Dividir)</h1>

<form method="post" action="divisao.php">
    Valor1<input type="text" name="valor1" required>
    Valor2<input type="text" name="valor2" required>
    <input type="submit" value="Dividir">
</form>