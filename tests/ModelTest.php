<?php

use AppBundle\Entity\Loisir;

class ModelTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testEntityLoisir()
    {
        $loisir = new Loisir();
        $loisir->setName("Poney");
        
        $this->assertEquals($loisir->getName(), "Poney");
        $this->assertEquals($loisir->getLowerName(), "poney");
        $loisir->setName("poney");
        
        $this->assertEquals($loisir->getName(), "poney");
        $this->assertEquals($loisir->getLowerName(), "poney");
        
    }
}