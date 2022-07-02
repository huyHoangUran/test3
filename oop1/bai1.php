<?php
include 'ex01.php';
    class Number{
    //    Thuộc tính (biến)
        public $numbera = 1;
       public $numberb =2;
    // Phương thức(hàm)
    function maketotal($a,$b){
        return $a+$b;
    }
    }
    $width =10;
    $height =15;
    // Khởi tạo đối tượng 
    $num=new Number();
    $total =$num->maketotal($num->numbera,$width);
    echo $total;
    $calc2=new Calculator();
    echo $calc2->makeAdd($width,$height);
?>