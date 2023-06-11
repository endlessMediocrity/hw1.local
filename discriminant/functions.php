<?php

function discriminant($a, $b, $c)
{
    return pow($b, 2) - 4 * $a * $c;
}

assert(-3 === discriminant(1, 1, 1));
assert(1 === discriminant(1, 3, 2));


function root($a, $b, $d, $numRoot)
{
    if ($numRoot == 1) {
        return ($b + pow($d, 1 / 2)) / 2 * $a;
    } else {
        return ($b - pow($d, 1 / 2)) / 2 * $a;
    }
}


assert(5 === root(3, 14, 256, 1));
assert(-1 / 3 === root(3, 14, 256, 2));