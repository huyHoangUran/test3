<?php
    require_once "./classes/calculator.php";
    $calc3= new Calculator;
    // var_dump($calc3);
    //echo $calc3->makeAdd(5,8);
    echo Calculator::makeMinus(3,5);
?>