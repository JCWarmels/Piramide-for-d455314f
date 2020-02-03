<?php
echo("Hoeveel rijen stenen moeten er boven elkaar?".PHP_EOL);
$hoeveel = readline();
$stone = "*";
for($i=1;$i<=1;$i++){
    for($x=1;$x<=$hoeveel;$x++){
        echo (str_repeat($stone, $x).PHP_EOL);
    }
}