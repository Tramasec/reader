<?php
include "./vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use \PhpOffice\PhpSpreadsheet\IOFactory;
use \PhpOffice\PhpSpreadsheet\Writer\Csv;


$dat = new \Tramasec\Reader\XlsReader();


$dat->cargar(__DIR__. "/tmp/demo5.xlsx");
dump($dat->hojas[0]->getHeader());


foreach ($dat->hojas[0]->getRecords() as $dato) {
    var_dump($dat->getHoja(0)->getValueByHeader('nombre', $dato));
    die;
}

$dat->cargar(__DIR__. "/tmp/demo.tsv");
$dat->cargar(__DIR__. "/tmp/demo.ods");
$dat->cargar(__DIR__. "/tmp/demo.xlsx");
$dat->cargar(__DIR__. "/tmp/demo1.xlsx");
$dat->cargar(__DIR__. "/tmp/demo2.xlsx");
$dat->cargar(__DIR__. "/tmp/F10 Renovaciones - UNO A UNO.xlsx");

//var_dump($spreadsheet->getAllSheets());