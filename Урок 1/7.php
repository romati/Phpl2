<?php
class A
{
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}

class B extends A
{
}

$a1 = new A;
$b1 = new B;
//создание переменной $x для объекта класса A. Вывод: 1
$a1->foo();
//создание переменной $x для объекта класса B. Вывод: 1
$b1->foo();
//т.к. переменная $x уже создана, то выполняется только инкремент. Вывод: 2
$a1->foo();
//т.к. переменная $x уже создана, то выполняется только инкремент. Вывод: 2
$b1->foo();
