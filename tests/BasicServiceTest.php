<?php

use PHPUnit\Framework\TestCase;

class BasicServiceTest extends TestCase
{
    /**
     * @test
     */
    public function getFeeShouldReturnTheGivenValue(){
        $service = new \App\BasicService(50);
        $this->assertEquals(50,$service->getFee());
    }

    /**
     * @test
     */
    public function computeChargeShouldReturnTheGivenValue(){
        $service = new \App\BasicService(50);
        $this->assertEquals(50,$service->computeCharge());
    }
}