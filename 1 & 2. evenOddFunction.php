<?php
function oddOrEven($i) {
    if ($i % 2 == 0) {
        return "$i is an Odd number";
    } else {
        return "$i is an Even number";
    }
}

for ($i = 0; $i <=100; $i++){
    echo oddOrEven($i) . "\n";
}