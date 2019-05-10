<?php

use PHPUnit\Framework\TestCase;

class OilChangeServiceTest extends TestCase
{
    /**
     * @test
     */
    public function computeCharge(){
        $service = new \App\Oil\OilChangeService(50,85);
        $expected = 50 + 85;
        $this->assertEquals($expected,$service->computeCharge());
    }
}