<?php
/**
 * Hamming
 * 
 */

function distance(string $a, string $b): int
{
    if (count($a) !== count($b)){    
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }

    $a = str_split($a, 1);
    $b = str_split($b, 1);

    $hamming = 0;

    for($i = 0, $len = count($a); $i < $len; $i++) {
        if ($a[$i] !== $b[$i]) $hamming = $hamming + 1;
    }
    
    return $hamming;
}

$a = 'GGACGGGG';
$b = 'AGGACGTGG';

try {
    distance($a, $b);
} catch (Exception $e) {
    echo $e->getMessage();
}