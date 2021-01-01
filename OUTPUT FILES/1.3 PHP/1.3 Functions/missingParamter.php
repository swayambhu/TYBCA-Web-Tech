<?php
    function name1($a=null,$b = null,$c = null){
        if(isset($a)){
            echo "$a is Set <br/>";
        }
        if (isset($b)) {
            echo "$b is Set <br/>";
        }
        if (isset($c)) {
            echo "$c is Set <br/>";
        }
        
    }
    echo "With three arguments <br/>";
    name1(1,2,3);
    echo "With two arguments<br/>";
    name1(1,2);
    echo "With one argument <br/>";
    name1(1);
?>