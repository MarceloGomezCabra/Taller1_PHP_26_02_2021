<?php

/* 2) Calcular el sueldo que le corresponde al trabajador de una empresa que cobra $14.400.000 anual, 
el programa debe realizar los cálculos en función de los siguientes criterios:

•	Si lleva más de 10 años en la empresa se le aplica un aumento del 10%.
•	Si lleva menos de 10 años, pero más que 5 se le aplica un aumento del 7%.
•	Si lleva menos de 5 años, pero más que 3 se le aplica un aumento del 5%.
•	Si lleva menos de 3 años se le aplica un aumento del 3%. */

$años=(int)7;

function porcentaje($porcentaje){
    define("sueldo", (int)14400000);
    $aumento=(int)(($porcentaje*sueldo)/100)+sueldo;
    return $aumento;
}

if ($años>10){
    $resultado= porcentaje(10);
    print_r((string)"Su nuevo salario anual es: ".(int)$resultado.(string)" (aumentó un 10%)");
     
} else if ($años<=0){
    print_r(<<<TXT
    ERR0R.
TXT);

} else if ($años<10 && $años>5){
    $resultado= porcentaje(7);
    print_r((string)"Su nuevo salario anual es: ".(int)$resultado.(string)" (aumentó un 7%)");

} else if ($años<5 && $años>3){
    $resultado= porcentaje(5);
    print_r((string)"Su nuevo salario anual es: ".(int)$resultado.(string)" (aumentó un 5%)");

} else if ($años<3){
    $resultado= porcentaje(3);
    print_r((string)"Su nuevo salario anual es: ".(int)$resultado.(string)" (aumentó un 3%)");

} else {
    print_r(<<<TXT
    ERR0R.
TXT);

}

?>