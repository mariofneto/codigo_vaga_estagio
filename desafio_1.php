<?php
function isFibonacci($num)
{
    // Inicia os primeiros números da sequência de Fibonacci
    $a = 0;
    $b = 1;

    // Verifica se o número é um dos primeiros números da sequência
    if ($num == $a || $num == $b) {
        return true;
    }

    // Calcula a sequência de Fibonacci até encontrar o número ou excedê-lo
    while ($b < $num) {
        $temp = $b;
        $b = $a + $b;
        $a = $temp;
    }

    // Retorna verdadeiro se o número pertence à sequência de Fibonacci, falso caso contrário
    return $b == $num;
}

// Definindo o número a ser verificado (pode ser alterado ou solicitado ao usuário)
$numero = 21; // ou $_GET['numero'] para entrada via URL, ou $_POST['numero'] via formulário

// Verificando se o número pertence à sequência de Fibonacci
if (isFibonacci($numero)) {
    echo "$numero pertence à sequência de Fibonacci.";
} else {
    echo "$numero não pertence à sequência de Fibonacci.";
}
