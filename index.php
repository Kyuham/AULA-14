<?php

$casa=10;
echo "O valor contido em casa é: $casa </br>" ;
echo "O valor com acréscimo é:" . ++$casa . "</br>" ;


$pizza=50;
echo "O valor da pizza é: $pizza </br>";
echo "O valor com desconto é:" . --$pizza . "</br>";

$chocolate=10;
echo "o valor do chocolate é: $chocolate </br>";
echo "o valor do chocolate com acréscimento é:" . ++$chocolate . "</br>";
echo "o valor com pós incremento é:" . $chocolate++ . "</br>";


$refrigerante=7;
echo "o valor do refrigerante é: $refrigerante </br>";
echo "o valor do refrigerante com decrescimo é:" . --$refrigerante . "</br>";
echo "o valor com pós decremento é:" . $refrigerante-- . "</br>";

function Saudacao () {
    echo "Hello World";
}
Saudacao();

function Hello ($name)
echo "Hello, $name";

Hello($name);

?>