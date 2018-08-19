<?php
function r($length)
{
    $numbers = range(0,9);
    shuffle($numbers);
    for($i = 0;$i < $length;$i++)
       $digits .= $numbers[$i];
    return $digits;
}
?>