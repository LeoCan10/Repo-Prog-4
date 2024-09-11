Punto 2 - Comparación en código fuente

Explicación de las causas
El navegador recibe el código HTML resultante en ambos casos. Aunque prueba2.php contiene código PHP, este se ejecuta en el servidor web, que luego envía el HTML generado al navegador. Por lo tanto, el código fuente visto en el navegador es igual en ambos casos. La diferencia es que prueba1.php envía HTML estático desde el inicio, mientras que prueba2.php genera el HTML dinámicamente usando PHP en el servidor.