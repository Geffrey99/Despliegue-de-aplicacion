<?php

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();

// Generar el PDF
$html = '<html><body><h1>'.$_POST["cuerpo"].'</h1></body></html>';
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$output = $dompdf->output();

// Ruta local en el contenedor "pdf"
$file_path = '/guardapdf/mipdf.pdf';

// Guardar el PDF en el directorio local
file_put_contents($file_path, $output);
echo $output;

?>

