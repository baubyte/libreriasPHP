<?php
require '../vendor/autoload.php';

/**Imagen Original */
$imageOriginal = "punisher.jpg";
/**Nombre Imagen Modificada */
$imageEdit = "punisher-edit.jpg";
/**Instanciamos */
$phpThumb = new PHPThumb\GD($imageOriginal);
/**Redimensionar la Imagen */
$phpThumb->resize(800,400);
/**Recortar Imagen con Medidas */
//$phpThumb->crop(100,100,800,800)
$phpThumb->cropFromCenter(200,200);
$phpThumb->show();
$phpThumb->save($imageEdit);
;?>