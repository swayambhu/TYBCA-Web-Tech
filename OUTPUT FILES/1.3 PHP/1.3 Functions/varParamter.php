<?php
    function sum(){
        $count = 0;
        for ($i=0; $i < func_num_args(); $i++){
            $count += func_get_arg($i);
        }
        return $count."<br/>";
    }
    echo sum(1,2,3,4);
    echo sum(1,4);
    echo sum();
    echo sum(10,20,30);
?>