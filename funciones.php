<?php

function promedio_alumno($nota_1,$nota_2,$nota_3){
     $promedio=($nota_1+$nota_2+$nota_3)/3;
     return $promedio;
}


echo "El promedio del alumno/a es:".promedio_alumno(6,9,6);
echo "<br>";
echo "El promedio del alumno/a es:".promedio_alumno(8,2,5);
echo "<br>";
echo "El promedio del alumno/a es:".promedio_alumno(5,9,10);
echo "<br>";
echo "El promedio del alumno/a es:".promedio_alumno(10,2,3);
echo "<br>";
echo "El promedio del alumno/a es:".promedio_alumno(2,3,9);