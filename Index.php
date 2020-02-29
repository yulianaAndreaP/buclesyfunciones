<?php

echo ("Clase 4 bucles, arreglos y funciones");

//arreglo Indexado en php - array significa arreglo//

$arreglo=array("Juan","Maria","James","Sandra");

//Print_r se usa para mostrar los arreglos//

echo("<br> ");

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
echo("<br>...................");


//Bucles For

for($centinela=0;$centinela<=10;$centinela++){
    echo("<br>El valor de centinela es: ".$centinela."<br>");
    
}

//Bucle for para recorrer arreglos
echo("<br>...................");
$arreglo=array("Juan","Maria","James","Sandra");
for($centinela=0;$centinela<count($arreglo);$centinela++){
    echo("<br>".$arreglo[$centinela]."<br>");

}

//Bucle foreach para recorrer arreglos si tiene clave y es asociativo

echo("<br>...................");
$arreglo=array('Usuario1'=>"Juan",'Usuario2'=>"Maria",'usuario3'=>"James",'Usuario4'=>"Sandra");
foreach($arreglo as $clave=>$valor){
    
    echo "<br>"."La clave es: ".$clave."<br>";
    echo"<br>".($valor)."<br>";
}


//Bucle foreach para arreglo indexado cuando no tiene clave
echo("<br>...................");
$arreglo=array("Juan","Maria","James","Sandra");
foreach($arreglo as $clave=>$valor){
    echo"<br> El clave del cajon es: ".$clave."<br>";
    echo"<br> El valor del cajon es: ".$valor."<br>";
}






?>  
