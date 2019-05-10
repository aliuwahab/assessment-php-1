<?php
namespace App\Tire;

use App\InspectionService;

class TireRotationService extends InspectionService{

protected $charge;

public function __construct($fee, $charge){
    parent::__construct($fee);

    $this->charge = $charge;
}

public function computeCharge(){

    return $this->fee + $this->charge;
}

}

