<?php
namespace Tramasec\Reader;

class Hoja
{
    private $nombre;
    private $datos;
    private $headerIndex = 0;

    /**
     * @return int
     */
    public function getHeaderIndex(): int
    {
        return $this->headerIndex;
    }

    /**
     * @param int $headerIndex
     */
    public function setHeaderIndex(int $headerIndex): void
    {
        if (isset($this->datos[$headerIndex])) {
            $this->headerIndex = $headerIndex;
        }
    }

    /**
     * Hoja constructor.
     * @param string $nombre
     * @param array  $datos
     */
    public function __construct(string $nombre, array $datos)
    {
        $this->nombre = $nombre;
        $this->datos = $datos;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getDatos()
    {
        return $this->datos;
    }

    /**
     * @param mixed $datos
     */
    public function setDatos($datos): void
    {
        $this->datos = $datos;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->datos[$this->headerIndex];
    }

    /**
     * @return array
     */
    public function getRecords()
    {
        $data = [];

        foreach ($this->datos as $key => $dato) {
            if ($key > $this->headerIndex) {
                $data[] = $dato;
            }
        }

        return $data;
    }

    public function getValueByHeader(string $header, array $record)
    {

        $header = 'nombre';

        if(in_array($header, $this->getHeader())) {
            $a = array_search($header, $this->getHeader());


            if ($a >= 0) {
                return $record[$a];
            }
        }

        return null;
    }

}
