<?php

/* 1) Programa que lea un valor de precio base y calcule su impuesto, si el valor es mayor de 150.000 
se le aplicará un 19% de impuestos, en caso contrario se le aplicará un 16%.*/

$producto1 = (int) 1000000000;

if ($producto1 > 150000){
    $impuesto1=(float)(19*$producto1)/100;
    print_r((string)"El impuesto aplicado al producto es: ".(int)$impuesto1);

} else if ($producto1 < 150000){
    $impuesto1=(float)(16*$producto1)/100;
    print_r((string)"El impuesto aplicado al producto es: ".(int)$impuesto1);

} else { 
  print_r(<<<TXT
    Ingrese un precio válido.
TXT);

}

?>