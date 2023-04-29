<?php
$valor = 20; 
if ($valor % 2 == 0) {  // se o valor é par
    for ($i = 0; $i < $valor; $i++) {  // para cada valor anterior ao valor digitado
        echo $i . "<br>";  // exibe o valor
    }
} else {  // se o valor é ímpar
    echo "É ímpar";  // exibe a mensagem "é ímpar"
}
?>