<?php
    class Calculator{
        // Khai báo thuộc tính
        var $numberA=1,$numberB=5; //sử dụng var để khai báo thuộc tính  php  sẽ ngầm hiểu phạm vi là public
        // Khai báo hằng số
        const _MSG_CONTENT='Kết quả là {value}';
        // Khai báo phươn thức
        function makeAdd($a,$b){
            $result =$a+$b;
            return $result;
        }
        public function makeMinus($a,$b){
            $result =$a-$b;
            return $result;
        }
        public function licince($a,$b){
            $result =$a*$b;
            return $result;
        }
        public function division($a,$b){
           if($b!=0){
            $result = $a/$b;
            return $result;
           }
           return "Không chia được cho số  0";
        }
        function showResult($msg,$value){
            echo str_replace("{value}",$value,$msg);

        }
        function showShortRe($value){
            $msg=$this::_MSG_CONTENT;
            $this->showResult($msg,$value);

        }
        
    }
    ?>