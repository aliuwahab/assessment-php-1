<?php

use PHPUnit\Framework\TestCase;

class InspectionServiceTest extends TestCase
{
    /**
     * @test
     */
    public function getFeeShouldReturnTheGivenValue(){
        $service = new \App\InspectionService(50);
        $this->assertEquals(50,$service->getFee());
    }

    /**
     * @test
     */
    public function computeChargeShouldReturnTheGivenValue(){
        $service = new \App\InspectionService(50);
        $this->assertEquals(50,$service->computeCharge());
    }
}