<?php
/**
 * practica-Jimenez.php
 *
 * Script de ejemplo para generar documentación con phpDocumentor.
 *
 * @author Jimenez Cebrian, Ruben
 * @version 1.0
 * @internal Este script es parte de una práctica para el módulo de Desarrollo Web en Entorno Servidor.
 */

/**
 * Calcula el área de un rectángulo.
 *
 * @param float $base La base del rectángulo en cm.
 * @param float $altura La altura del rectángulo en cm.
 * @return float El área del rectángulo en cm².
 */
function calcularAreaRectangulo(float $base, float $altura): float {
    return $base * $altura;
}

/**
 * Convierte una temperatura de Celsius a Fahrenheit.
 *
 * @param float $celsius Temperatura en grados Celsius.
 * @return float Temperatura en grados Fahrenheit.
 * @author Jimenez
 * @version 1.0
 * @internal Solo se usa como ejemplo de documentación con phpDocumentor.
 */
function convertirCelsiusAFahrenheit(float $celsius): float {
    return ($celsius * 9 / 5) + 32;
}

// Ejemplos de uso
echo "Área: " . calcularAreaRectangulo(5, 10) . " cm²\n";
echo "Temperatura: " . convertirCelsiusAFahrenheit(25) . " °F\n";
