<?php

fscanf(STDIN, '%d %d %d', $a, $b, $c);

if ($a < $b & $a < $c) {

    echo $a;
} elseif ($b < $a & $b < $c) {
    echo $b;
} else {
    echo $c;
}
