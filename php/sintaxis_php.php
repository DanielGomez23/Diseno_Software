<?php

#Tipos de variables
$nombreVariable = "Hola mundo";
$numero = 10;
$decimal = 10.5;
$bool = true;
$array = [1,2,3];

#Estructuras de control
#SI SIMPLE
if ("condition"){

}
#SI DOBLE
if ("condition") {
    echo "Si";

}else{
    echo "No";
}

#SI ANIDADO
$anidar = "Anidar terminos";
if ("condition"){
    echo "Si";
} else if ("condition"){
    echo "Si";
}else{
    echo "No. $anidar";
}


#CICLOS
#Ciclo For

for ($i = 0; $i < 10; $i++) {
    echo $i;
}
#Ciclo while
$i = 0;
while ($i <10) {
    echo $i;
    $i++;
}
#Do while
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 10);
#Ciclo FOREACH
$array = [1,2,3,4,5];
foreach ($array as $value) {
    echo $value;
}
#Funciones
function sumar($a, $b) {
    return $a + $b;
}
echo sumar(10, 20);