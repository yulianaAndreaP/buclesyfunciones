<?php

echo ("Clase 4 bucles, arreglos y funciones");

//arreglo Indexado en php - array significa arreglo//

$arreglo=array("Juan","Maria","James","Sandra");

//Print_r se usa para mostrar los arreglos//

echo("<br>");

Print_r($arreglo);

//Los puntos se usan como separador en linea//

echo("<br>...................");

//array asociativo, el usuario siempre va en comillas simples, cada cajon solo guarda un valor

$arreglo=array('Usuario1'=>"Juan",'Usuario2'=>"Maria",'usuario3'=>"James",'Usuario4'=>"Sandra");

echo("<br>");

Print_r($arreglo);

echo("<br>...................");

//tamaño de un arreglo

$tamano=count($arreglo);
echo("<br>");
echo ("El tamaño de mi arreglo Es:".$tamano);




?>  
