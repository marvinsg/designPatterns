<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Application\Service;

use MarvinSoriano\AbstractFactoryPatternPHP\Domain\AbstractCarsFactory;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\CompetitionCar;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\UrbanCar;

final class CompetitionCarFactory implements AbstractCarsFactory
{
    public function createUrbanCar(string $carLicensePlate, string $brand, string $model): UrbanCar
    {
        // TODO: Implement createUrbanCar() method.
    }

    public function createCompetitionCar(string $brand, string $model): CompetitionCar
    {
        return new CompetitionCar($brand, $model);
    }
}
