<?php
require '../vendor/autoload.php';
/**Importamos la  Libreria*/
use Spipu\Html2Pdf\Html2Pdf;
/**Instanciamos */
$html2pdf = new Html2Pdf();
/**Obtener la Vista para Imprimir */
ob_start();
require_once 'pdfParaGenerar.php';
$html = ob_get_clean();
/**Creamos el PDF */
$html2pdf->WriteHTML($html);
$html2pdf->output("generarPdf.pdf");
?>