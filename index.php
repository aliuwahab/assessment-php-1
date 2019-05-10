<?php

require __DIR__ . '/vendor/autoload.php';

// Faiq
$service = new App\BasicService(50);
$faiqCharge =  $service->computeCharge();
echo "\nFaiq charge: {$faiqCharge}";

// Eshaan
$eshaanOil = new App\Oil\OilChangeService(50,85);
$eshaanCharge = $eshaanOil->computeCharge();
echo "\nEshaan charge: {$eshaanCharge}";

// Aliu
$aliuTire = new App\Tire\TireRotationService(50,23.5);
$aliuCharge = $aliuTire->computeCharge();
echo "\nAliu charge: {$aliuCharge}";

// Faiq Total cost
$faiqOil = new App\Oil\OilChangeService(50,85);
$faiqTire = new App\Tire\TireRotationService(50,23.5);
$faiqTotalCharge = $faiqOil->computeCharge() + $faiqTire->computeCharge() - $faiqOil->getFee();
echo "\nFaiq total charge: {$faiqTotalCharge}";

