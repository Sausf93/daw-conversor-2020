<?php
include_once('./src/Conversor.php');
use PHPUnit\Framework\TestCase;
class ConversorTest extends TestCase{
    

    public function testEurosADolares(){

        $conversor = new Conversor();
        $this->assertEquals($conversor->eurosADolares(1), 0.88);
    }

    public function testEurosAYenes(){

        $conversor = new Conversor();
        $this->assertEquals($conversor->eurosAYenes(1), 0.5);
    }
}

?>