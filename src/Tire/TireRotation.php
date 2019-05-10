<?php
namespace App\Tire;

use App\BasicService;

class TireRotation extends BasicService{

protected $charge;

public function __construct($fee, $charge){
    parent::__construct($fee);

    $this->charge = $charge;
}

public function computeCharge(){

    return $this->fee + $this->charge;
}

}

