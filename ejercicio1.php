<?php

// Crear array

$estadios_futbol = [
    "Barcelona" => "Camp Nou",
    "Real Madrid" => "Bernabeu",
    "Valencia" => "Mestalla",
    "Real Sociedad" => "Anoeta"
];
// Mostrar datos

echo "<table border=1px>";

echo "<th> BARCELONA </th>"  ;
echo "<td>".$estadios_futbol["Barcelona"]."</tr>";

echo "<th> REAL MADRID </th>"  ;
echo "<td>".$estadios_futbol["Real Madrid"]."</tr>";

echo "<th> VALENCIA </th>"  ;
echo "<td>".$estadios_futbol["Valencia"]."</tr>";

echo "<th> REAL SOCIEDAD </th>"  ;
echo "<td>".$estadios_futbol["Real Sociedad"]."</tr>";

//Elimino el elemento con clave = dos y muestro el array
unset($estadios_futbol["Real Madrid"]);

//Compruebo el valor de la variable $estadiosfutbol

//foreach($estadios_futbol as $estadio)
//echo $estadio."<br>";

print_r("<pre>");
print_r($estadios_futbol);
print_r("</pre>");



?>

