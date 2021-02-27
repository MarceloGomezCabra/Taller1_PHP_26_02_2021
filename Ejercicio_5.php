<?php

/* 5) El profesor de una materia desea conocer la cantidad de sus alumnos que no tienen derecho al examen de nivelación.
Diseñe el algoritmo que lea las calificaciones obtenidas en las 5 unidades por cada uno de los 40 alumnos 
y escriba la cantidad de ellos que no tienen derecho al examen de nivelación. */


$estudiantex=(array)[
    (string)"Nota1" => (int)9 ,
    (string)"Nota2" => (int)6 ,
    (string)"Nota3" => (int)8 ,
    (string)"Nota4" => (int)6 ,
    (string)"Nota5" => (int)5
];

$notas=array_values($estudiantex);
$promedio = (int)(array_sum($notas))/5;

if ($promedio > 5 && $promedio < 7 ) { print_r(<<<TXT
    El estudiante tiene derecho a presentar el examen de nivelación.
TXT);

} else if ($promedio > 10 || $promedio < 0) { print_r(<<<TXT
    ERR0R.
TXT);


} else { print_r(<<<TXT
    El estudiante no tiene derecho a presentar el examen de nivelación.
TXT);

}










?>