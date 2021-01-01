<?php
    function makeCoffee($type = "Filter_Coffee"){
        return "Making a Cup of $type. <br/>";
    }
    echo makeCoffee();
    echo makeCoffee(null);
    echo makeCoffee("Cappuccino");
?>