<?php

use PHPUnit\Framework\TestCase;

class TireRotationServiceTest extends TestCase
{
    /**
     * @test
     */
    public function computeCharge(){
        $service = new \App\Tire\TireRotationService(50,23.5);
        $expected = 50 + 23.5;
        $this->assertEquals($expected,$service->computeCharge());
    }
}