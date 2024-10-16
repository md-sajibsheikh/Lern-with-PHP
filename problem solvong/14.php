<?php

fscanf(STDIN,'%s',$a);

$b="aeiou";


$c=strpos($a,$b);

if($c!== false){
    echo "The string contains a vowel.";
}
else{
    echo "The string does not contain any vowel.";
}