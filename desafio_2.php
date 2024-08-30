<?php
function countLetterA($string)
{
    // Conta a ocorrência de 'a' e 'A'
    $count = substr_count(strtolower($string), 'a');
    return $count;
}

// String de exemplo (pode ser alterada ou solicitada ao usuário)
$string = "A Amazônia é incrível";

// Verificando a quantidade de ocorrências da letra 'a'
$count = countLetterA($string);

if ($count > 0) {
    echo "A letra 'a' aparece $count vezes na string.";
} else {
    echo "A letra 'a' não aparece na string.";
}
