<?php
require '../vendor/autoload.php';

/**Conexion a la DB */
$conexion = new mysqli("localhost","root","","shop");
$conexion->query("SET NAMES 'utf8'");
/**Consulta para el Numeros de Registros */
$query = $conexion->query("SELECT COUNT(*) AS 'total' FROM products");
/**Obtenemos la Cantidad de Registros */
$numRows = $query->fetch_object()->total;
/**Registros a Mostrar por Paginas */
$numElementPage = 10;
var_dump($numRows);         
/**Instanciasmos */
$pagination = new Zebra_Pagination();
/**LLamamos al Metodo para el Numero de Elementos a Paginar */
$pagination->records($numRows);
/**Numero de Elementos por Paginas */
$pagination->records_per_page($numElementPage);
/**Pagina Actual */
$page = $pagination->get_page();
/**Desde que Registro */
$start=(($page-1)*$numElementPage);
$products =$conexion->query("SELECT * FROM products LIMIT $start,$numElementPage");

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($product = $products->fetch_object()){
    echo "<h1>{$product->name}</h1>";
    echo "<p>{$product->description}</p>";
}
/**Mostramos los Links de la Paginas */
$pagination->render();
?>