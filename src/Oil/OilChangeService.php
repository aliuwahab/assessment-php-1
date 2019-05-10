<?php

namespace App\Oil;

use App\InspectionService;

class OilChangeService extends InspectionService {

protected $charge;

public function __construct($fee, $charge){
    parent::__construct($fee);
    $this->charge = $charge;
}

public function computeCharge(){

    return $this->fee + $this->charge;
}

}


