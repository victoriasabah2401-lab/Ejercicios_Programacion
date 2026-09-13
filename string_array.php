<?php

$fecha_1="2021/11/29";
$fecha_2="2021-11-30";
$numeros="Uno Dos Tres Cuatro Cinco Seis Siete";

#Fecha 1
$array_fecha1=explode ("/",$fecha_1);
echo $array_fecha[3];

#Fecha 2
$array_fecha=explode ("-",$fecha_2);
echo $array_fecha[2];

#Numeros
$array_numeros=explode (" ",$numeros);
echo $array_numeros[4];

#Con limitador
$array_numeros=explode (" ",$numeros,4);
echo $array_numeros[1];