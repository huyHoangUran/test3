<?php
    // Khởi tạo đối tượng
    $calc=new Calculator();
    // Lấy giá trị thuộc tính
    echo $calc->numberA;
    echo "<br>";
    echo $calc->numberB;
    echo "<hr>";
    // Gán giá trị cho thuộc tính
    echo $calc->numberA=15;
    echo "<br>";

    echo $calc->numberB=100;
    echo "<hr>";
    // gọi phương thức
    $cong= $calc->makeAdd($calc->numberA,$calc->numberB);
    echo $cong;
    echo "<hr>";
    // echo Calculator::_MSG_CONTENT;
    // $calc->showResult($calc::_MSG_CONTENT,$cong);
    $calc->showShortRe($cong);
    echo "<hr>";

?>