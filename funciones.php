<?php

function saludo($nombre){
     return "Hola, mi nombre es $nombre";
}

echo saludo("Nicole");
echo "<br>";
$usuario="Ashley";
echo saludo($usuario);
echo "<br>";
$usuario="Maria";
echo saludo($usuario);

