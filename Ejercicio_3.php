<?php

// 3) Programa para solicitar el nombre, y la nota promedio de 5 estudiantes de un curso de computación.

$estudiantes=(array)[
    (string)"Erick"=> (int)9 ,
    (string)"Tom" => (int)5 ,
    (string)"Fabian" => (int)7 ,
    (string)"Andrew" => (int)6 ,
    (string)"Piter" => (int)10
];

$notas=array_values($estudiantes);
$promedio = (int)(array_sum($notas))/5;

print_r((string)"El promedio del curso es:".(int)$promedio);

?>