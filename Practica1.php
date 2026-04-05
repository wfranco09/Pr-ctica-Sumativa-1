<?php
/* Web Programming
 * Practica 1: Operadores en PHP
 * Autor: Winston Franco
 * Fecha: 04/05/2026
 */
// Ejercicio 1: ejemplos basicos de operadores en PHP
echo "Problema 1<br>";

// Ejemplo de suma entre dos numeros enteros
echo "<br>SUMA";
$num1 = 3; // Variable de tipo entero
$num2 = 5;
$resultado = $num1 + $num2 ;
echo "<br>El Resultado de $num1 + $num2 es:  $resultado" ;

// Ejemplo de resta
echo "<br><br>RESTA";
$num1 = 9;
$num2 = 1;
$resultado = $num1 - $num2 ;
echo "<br>El Resultado de $num1 - $num2 es:  $resultado" ;

// Ejemplo de multiplicacion
echo "<br><br>MultiolicaciÃ³n";
$num1 = 9;
$num2 = 9;
$resultado = $num1 * $num2 ;
echo "<br>El Resultado de $num1 * $num2 es:  $resultado" ;

// Ejemplo de division
echo "<br><br>MultiplicaciÃ³n";
$num1 = 9;
$num2 = 9;
$resultado = $num1 / $num2 ;
echo "<br>El Resultado de $num1 / $num2 es:  $resultado" ;

// Ejemplo del operador modulo para obtener el residuo
echo "<br><br>MÃ³dulo";
$num1 = 4;
$num2 = 8;
$resultado = $num1 % $num2 ;
echo "<br>El Resultado del modulo de $num1 entre $num2 es:  $resultado" ;

// Ejemplo de potencia usando el operador **
echo "<br><br>Potencia";
$num1 = 2;
$num2 = 2;
$resultado = $num1 ** $num2 ;
echo "<br>El Resultado de la potencia de $num1 a la $num2 es: $resultado" ;

// Aqui se aplica primero la multiplicacion por la precedencia de operadores
echo "<br><br>Orden de Procedencia";
$num1 = 2;
$num2 = 2;
$num3 = 3;
$resultado = $num1 + $num2 * $num3;
echo "<br> El resultado de Orden de procedencia es : $resultado" ;

// Aqui los parentesis cambian el orden y obligan a sumar primero
echo "<br><br>Orden de Procedencia";
$num1 = 2;
$num2 = 2;
$num3 = 3;
$resultado = ($num1 + $num2) * $num3;
echo "<br> El resultado de Orden de procedencia es : $resultado"     ;

// Mensaje final en pantalla
echo "<br><br>HOLA MUNDO";
?>
