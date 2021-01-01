<?php
    function find_max($a,$b){
        return $a > $b ? $a : $b;
    }
    function find_mini($a,$b){
        return $a < $b ? $a : $b;
    }
    $x = 'find_max';
    echo $x(12,13)."<br/>";
    $x = 'find_mini';
    echo $x(12,13). "<br/>";
?>