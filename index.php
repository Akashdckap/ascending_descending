<?php
function integerArray($numbers){
    sort($numbers);
    print_r($numbers);

    rsort($numbers);
    print_r($numbers);
}
integerArray([2,3,1,-2,-9,-5]);