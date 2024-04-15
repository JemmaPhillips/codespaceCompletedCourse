<?php

// set up function and define vowels (array)
function replaceVowelsWithX($str){
    $vowels = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U'];


// replace vowels with x
$replace = str_replace($vowels, 'x', $str);

// return the replaced string
return $replace;
}

// input
$input = 'Hello World';
echo 'Input: ' . $input . '<br>';

echo 'Output: ' . replaceVowelsWithX($input);
