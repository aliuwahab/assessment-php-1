<?php
namespace App;

class BasicService {
protected $fee;

public function __construct($fee){
    $this->fee = $fee;
}
public function setFee($fee){
    $this->fee = $fee;
}

    public function getFee(){
        return $this->fee;
    }

    public function computeCharge(){
        return $this->fee;
    }
}
