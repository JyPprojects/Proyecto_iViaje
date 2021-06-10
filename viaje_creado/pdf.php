<?php
require_once("../librerias/TCPDF/tcpdf.php");


if(isset($_POST["desc_pdf"])){

    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    $PDF_HEADER_TITLE="M&T";
    $PDF_HEADER_STRING="Organizador de viajes";
    $PDF_HEADER_LOGO="../librerias/TCPDF/examples/images/tcpdf_logo.jpg"; //Solo me funciona si esta dentro de la carpeta images de la libreria

    $pdf->SetHeaderData($PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $PDF_HEADER_TITLE, $PDF_HEADER_STRING);
    // $pdf->SetHeaderData($PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));

    // set header and footer fonts
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));



    // Add a page
    // This method has several options, check the source code documentation for more information.

    $pdf->AddPage();
    $pdf->Image('../menu_post-login/Imagenes/logo.jpg', 10, 1, 30, 30, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);

    // Set some content to print
    $html = <<<EOD
    <br><br><br><br>
    <h1><u>INFORMACIÓN DEL VIAJE</u></h1>
    <h2>Nombre viaje: $info_viaje[0]</h2>
    <h2>Pais: $info_viaje[1]</h2>
    <h2>Inicio del viaje: $info_viaje[2]</h2>
    <h2>Final del viaje: $info_viaje[3]</h2>
    <h2>Duración del viaje: $dias</h2>
    <h1><u>TRANSPORTE</u></h1>
    <h2>Medio de transporte: $info_transporte[1]</h2>
    <h2>Cantidad:</h2>
    <h2>Tipo de Combustible:</h2>
    <h1><u>ALOJAMIENTO</u></h1>
    <h2>Tipo de alojamiento: $info_estancia[1]</h2>
    <h2>Direccion: $info_estancia[2]</h2>
    <h2>Telefono Alojamiento: $info_estancia[3]</h2>
    <h1><u>PARTICIPANTES</u></h1>
    EOD;

    // Print text using writeHTMLCell()
    $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

    ob_end_clean();
    // Close and output PDF document
    // This method has several options, check the source code documentation for more information.
    $pdf->Output("Resumen_$info_viaje[0].pdf", 'i');

}


?>