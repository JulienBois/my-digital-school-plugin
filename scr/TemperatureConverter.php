<?php

namespace App\MyDigitalSchool;

class TemperatureConverter
{
public function convert(float $temperature, string $unite): float
{
    if ($unite === 'C') {
        return $unite * 9 / 5 + 32;
    }
    if ($unite === 'F') {
        return ($unite - 32) * 5 / 9;
    } 
     throw new \InvalidArgumentException('Error Processing Request', 1);
}

}