<?php

declare(strict_types=1);

namespace MyVendor\MyPackage;

use PHPUnit\Framework\TestCase;

class MyPackageTest extends TestCase
{
    /**
     * @var MyPackage
     */
    protected $myPackage;

    protected function setUp() : void
    {
        //$this->myPackage = new MyPackage;
    }

    public function testIsInstanceOfMyPackage() : void
    {

        $dat = new \Tramasec\Reader\XlsReader();

        $dat->cargar(__DIR__. "/../tmp/demo5.xlsx");
        dump($dat->hojas[0]->getHeader());

        $dat->cargar(__DIR__. "/../tmp/demo.tsv");
        $dat->cargar(__DIR__. "/../tmp/demo.ods");
        $dat->cargar(__DIR__. "/../tmp/demo.xlsx");
        $dat->cargar(__DIR__. "/../tmp/demo1.xlsx");
        $dat->cargar(__DIR__. "/../tmp/demo2.xlsx");
        $dat->cargar(__DIR__. "/../tmp/F10 Renovaciones - UNO A UNO.xlsx");

        $this->assertTrue(true);

    }
}
