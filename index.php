<?php
require_once __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml('<h1>PDF via External DomPDF</h1>');
$dompdf->render();
$dompdf->stream();

?>
