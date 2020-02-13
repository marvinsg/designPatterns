<?php

namespace MarvinSoriano\AbstractFactoryPatternPHP\Domain;

use MarvinSoriano\AbstractFactoryPatternPHP\Domain\UrbanCar;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\CompetitionCar;

interface AbstractCarsFactory
{
    public function createUrbanCar(string $carLicensePlate, string $brand, string $model): UrbanCar;

    public function createCompetitionCar(string $brand, string $model): CompetitionCar;
}
