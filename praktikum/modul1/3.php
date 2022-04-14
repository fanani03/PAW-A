<?php 

echo "Ahmad Fanani/200411100143<br>";
$x = 5;

function variable (){
    $x = 6;
    echo "variable local$x";

}

function variableG (){
    global $x;
    echo "variable local$x";

}


variable();
variableG();
?>

