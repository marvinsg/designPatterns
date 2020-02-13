<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Application\Service;

use MarvinSoriano\AbstractFactoryPatternPHP\Domain\AbstractCarsFactory;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\CompetitionCar;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\UrbanCar;

final class UrbanCarFactory implements AbstractCarsFactory
{
    public function createUrbanCar(string $carLicensePlate, string $brand, string $model): UrbanCar
    {
        return new UrbanCar($carLicensePlate, $brand, $model);
    }

    public function createCompetitionCar(string $brand, string $model): CompetitionCar
    {
        // TODO: Implement createCompetitionCar() method.
    }
}
