<?php

/* 4) El programa muestra primero una tabla de notas con sus equivalentes en el Standard Grading System
o el sistema utilizado en los Estados Unidos que va desde la A hasta la F. El programa preguntará 
al usuario su nota y transformará ese resultado al equivalente en el Standard Grading System. 
También el programa dará una pequeña pero valiosa recomendación al usuario respecto a su nivel de estudio y 
calidad como estudiante. */



$nota=(int)60;

if ($nota>100){ print_r(<<<TXT
    ERR0R.
TXT);

} else if ($nota < 0){ print_r(<<<TXT
    ERR0R.
TXT);

} else if ($nota > 89 && $nota < 101){ print_r(<<<TXT
    !Enhorabuena¡ obtuviste una A, eres un crack, deberías trabajar en silicon valley.
TXT);

} else if ($nota > 79 && $nota < 90){ print_r(<<<TXT
    !Felicidades¡ obtuviste una B, te depara un buen futuro en el campo del saber. 
TXT);

} else if ($nota > 69 && $nota < 80){ print_r(<<<TXT
    !Oh! obtuviste una C, el esfuerzo trae sus recompensas.
TXT);

} else if ($nota > 59 && $nota < 70){ print_r(<<<TXT
    Obtuviste una D, debes estudiar más para mejorar tus resultados.
TXT);

} else if ($nota > 0 && $nota < 60){ print_r(<<<TXT
    Obtuviste una E, aún hay tiempo para mejorar tu promedio !Empieza a estudiar ya!.
TXT);

} else if ($nota === 0){ print_r(<<<TXT
    Obtuviste una F, si continuas con el desmpeño bajo no esperes ser Bill Gates en 5 años.
TXT);
// $lista = (array) [
//     "Traditional" => array(
//         0 => array(90, 100),
//         1 => array(80, 89),
//         2 => array(70, 79),
//         3 => array(60, 69),
//         4 => array(59),
//         5 => array(0),
//     ),
//     "Point_Range" => array(
//         0 => array(12, 14),
//         1 => array(9, 11),
//         2 => array(6, 8),
//         3 => array(3, 5),
//         4 => array(1,2),
//         5 => array(0),
//     ),
//     "SBG_Letter" => array(
//         0 => array("A"),
//         1 => array("B"),
//         2 => array("C"),
//         3 => array("D"),
//         4 => array("E"),
//         5 => array("Z"),
//     ),
//     "Proficiency_level_witch_standard" => array(
//         0 => array("Exceeds proficiency"),
//         1 => array("Demonstrates proficiency"),
//         2 => array("Approaches proficiency"),
//         3 => array("Falls well below proficiency"),
//         4 => array("Lacks all proficiency"),
//         5 => array("No attempt made"),
//     ),
// ];
} 
 















?>