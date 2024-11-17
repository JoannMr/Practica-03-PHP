<?php

// EJERCICIO 1

// En este codigo hemos declarado el array con las notas, hemos iniciado las variables de aprovado y suspendido, ademas de iniciar i para recorrer
// el array. 

$notes = [4, 9, 5, 7, 6, 10, 3, 8, 6, 2];

$aprovats = 0;
$suspensos = 0;
$i = 0;


// Hacemos un bucle while para recorrer cada nota y determinamos si es aprovado o suspendido envase 5. 

while ($i < count($notes)) {
    $nota = $notes[$i];

    if ($nota >= 5) {
        $aprovats++;
    } else {
        $suspensos++;
    }

    // Para acabar hacemos un switch determinando por la nota que caso saldra por pantalla envase a esa nota del array.

    switch (true) {
        case ($nota >= 9):
            $comentari = "Assoliment Excel·lent";
            break;
        case ($nota >= 7):
            $comentari = "Assoliment Notable";
            break;
        case ($nota >= 5):
            $comentari = "Assoliment Suficient";
            break;
        default:
            $comentari = "Assoliment Insuficient";
    }

    // Por ultimo, juntamos la nota con su resultado y la printamos.

    echo "Nota: $nota - $comentari<br>";
    $i++;
}

// Para acabar, printamos lo que hemos sumado en el bucle.

echo "<br>Total d'aprovats: $aprovats<br>";
echo "Total de suspesos: $suspensos<br>";
echo "<br>";

// EJERCICIO 2

// Declaramos los 3 arrays, productes, preus y categories.

$productes = ["Laptop", "Camisa", "Auriculars", "Llibre", "Jaqueta", "Tablet", "Sabates", "Smartphone"];
$preus = [1000, 20, 150, 25, 50, 300, 40, 700];
$categories = ["Electrònica", "Roba", "Electrònica", "Altres", "Roba", "Electrònica", "Altres", "Electrònica"];

// Creamos un table, para tener una forma más estructurada para el tr.

echo "<table border='1'>";

// Creamos un bucle for, que recorre los arrays. 

for ($i = 0; $i < count($productes); $i++) {
    $descompte = 0;

    // Determinas por cada categoria que descuento se ha de implementar. Como ha pedido SOLO en (Electronica,Roba y Altres), solo implementamos a esos.

    switch ($categories[$i]) {
        case "Electrònica":
            $descompte = 15;
            break;
        case "Roba":
            $descompte = 10;
            break;
        case "Altres":
            $descompte = 5;
            break;
    }

    // Calculamos el precio original con el descuento. Esto nos daria el precio final del producto.

    $preuOriginal = $preus[$i];
    $preuFinal = $preuOriginal - ($preuOriginal * $descompte / 100);

    // Mostramos en formato HTML la informacion.

    echo "<tr>
            <td>{$productes[$i]}</td>
            <td>{$preuOriginal}</td>
            <td>{$descompte}%</td>
            <td>" . number_format($preuFinal, 2) . "</td>
          </tr>";
}

echo "</table>";
echo "<br>";

// EJERCICIO 3

// Como anteriormente, declaramos el array y inicializamos las variables a 0.

$numeros = [3, 8, 15, 24, 7, 10, 2, 5];
$sumaParells = 0;
$sumaSenars = 0; 
$i = 0;           

// Creamos un bucle while para recorrer esos arrays, obteniendo los numeros de el.

while ($i < count($numeros)) {

    $numero = $numeros[$i];

    // Creamos un switch para verificar si es par o impar.

    switch ($numero % 2) {
        case 0:
            $sumaParells += $numero;
            break;
        case 1: 
            $sumaSenars += $numero;
            break;
    }
    $i++;
}

// Mostramos la suma de los pares e impares totales del array por separado.

echo "Total numeros parells es: $sumaParells<br>";
echo "Total numeros senars es: $sumaSenars<br>";
?>


