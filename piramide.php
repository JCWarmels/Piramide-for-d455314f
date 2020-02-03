<?php
echo("Hoeveel rijen stenen moeten er boven elkaar?".PHP_EOL);
$hoeveel = readline();
$stone = "*";
for($i=1;$i<=$hoeveel;$i++){
    for($x=1;$x<=$i;$x++){
        echo $stone;
    }
    echo PHP_EOL;
}