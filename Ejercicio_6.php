<?php
/* 6) Determina si un carácter de entrada es una letra minúscula, una letra mayúscula o un número.
Si estas tres condiciones son false, el carácter no es un carácter alfanumérico. En el ejemplo se muestra un mensaje 
para cada caso. */

$caracter = "n";

if (is_numeric($caracter)){ print_r(<<<TXT
    El carácter ingresado es un número.
TXT);    

} else if (is_string($caracter)){
    $r= strtoupper($caracter);

    if ($r==$caracter){ print_r(<<<TXT
        El carácter ingresado es una letra mayúscula.
TXT); 
        
    } else {print_r(<<<TXT
        El carácter ingresado es una letra minúscula.
TXT); }
    

} else {print_r(<<<TXT
    El carácter no corresponde al conjunto de los alfanuméricos.
TXT); 

}

unset($caracter);
















?>