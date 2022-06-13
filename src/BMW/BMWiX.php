<?php

namespace App\BMW;

use App\AdditionalVehicleCapabilities;
use App\ArrowInterface;
use App\CarFeatures;
use App\EachCarClass;
use JetBrains\PhpStorm\Pure;

class BMWiX extends AdditionalVehicleCapabilities implements CarFeatures, ArrowInterface
{
    const SpeedConfident = 2;
    const FuelRatio = 2;
    use EachCarClass;
}