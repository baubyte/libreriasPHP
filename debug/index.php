<?php
require '../vendor/autoload.php';

/**Aramamos un Array para Probar necesita una extension para el Nvegador FirePHP (Official)*/
$test = array('1','2','3','4','5','6','7','8','9','10');
/**Instanciamos es estatica */
\FB::log($test);
echo "Hola Mundo";
\FB::log("Consola Log");
?>