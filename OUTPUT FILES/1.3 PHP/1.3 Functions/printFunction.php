<?php
    $a = 5;
    $b = 10;
    $month = 1;
    $day = 13;
    $year =2021;
    $arr = array('name' => 'abc', 'age' => 12);
    echo "Echo is used to print line ";
    print "<br/> Hello world";
    echo "<br/> $a $b";
    print "<br/>$a $b";
    printf ('<br/> %02f', 27.452);
    printf('<br/> %02d/%02d/%04d <br/>', $day, $month,  $year);
    print_r($arr);
    echo "<br/>";
    var_dump(14);
    echo "<br/>";
    var_dump("Hello");
    echo "<br/>";
    var_dump(25, "abc");
    echo "<br/>";
    var_dump(array('name' => 'abc', 'age' => 12));
?>