<?php
namespace Tramasec\Reader;

use PhpOffice\PhpSpreadsheet\IOFactory;

class XlsReader extends IOFactory
{
    public $hojas = [];

    public function cargar(string $path)
    {
        $this->hojas = [];
        $spreadsheet = $this->load($path);

        foreach ($spreadsheet->getSheetNames() as $name) {
            $lista = $spreadsheet->getSheetByName($name);
            $this->hojas[] = new Hoja($name, $lista->toArray());
        }
    }

    /**
     * @param $dat
     * @return Hoja
     */
    public function getHoja($dat) : Hoja
    {
        return $this->hojas[$dat];
    }
}
