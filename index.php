<?php

class B{
}

class A extends B{
    public $a1;
    public $a2;
    public $a3;
    public $a4;
    protected $_c	;

    function __construct($var1, $var2, $var3, $var4){
        $this -> $a1 = $var1;
        $this -> $a2 = $var2;
        $this -> $a3 = $var3;
        $this -> $a4 = $var4;
    }
}

$ob1 = new B();
$ob2 = new B();
$ob3 = new B();
$ob4 = new B();
$obA = new A($ob1, $ob2, $ob3, $ob4);

var_dump($obA);
?>