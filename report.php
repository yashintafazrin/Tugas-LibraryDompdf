<?php
require 'vendor/autoload.php';

//reference the Dompdf name space
use Dompdf\Dompdf;

//instantiate and use  the dompdf class
$dompdf = new Dompdf;
$dompdf->loadHtml('Menggunakkan Library DOMpdf untuk Membuat Report PDF dengan DOMPDF');

//optional setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

//render the html as pdf
$dompdf->render();

//output the generated pdf to browser
$dompdf->stream('hasil_report.pdf');

?>