<?php // ejercicio 1

$miVariable = 6;

$miVariable2 = 2;

$suma = ($miVariable + $miVariable2);
$resta = ($miVariable - $miVariable2);


print_r ($suma);
echo "\n";
print_r ($resta);
echo "\n\n";

//ejercicio 2


$miRaiz = [0, 'hola', 2 , 3];

var_dump ($miRaiz[1]);
echo "\n\n";

//ejercicio 3

$coche = [];
$coche[] = array (
    "marca" => 'Ferrari',
    "modelo" => '488 GTB',
);
$coche[] = array (
    "marca" => 'Honda',
    "modelo" => 'Civic',
);
$coche[] = array (
    "marca" => 'Porsche',
    "modelo" => 'Carrera',
);

echo "con FOR \n\n";

for ($i = 0; $i < sizeof($coche); $i++) {
        echo "Marca: " . $coche[$i]['marca'] . "\n";
    }
;
?>