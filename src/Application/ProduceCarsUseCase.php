<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Application;

use MarvinSoriano\AbstractFactoryPatternPHP\Domain\AbstractCarsFactory;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\Car;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\CompetitionCar;
use MarvinSoriano\AbstractFactoryPatternPHP\Domain\UrbanCar;

final class ProduceCarsUseCase
{
    private $urbanCarsFactory;
    private $competitionCarsFactory;
    private $urbanCar;
    private $competitionCar;

    public function __construct(AbstractCarsFactory $urbanCarsFactory, AbstractCarsFactory $competitionCarsFactory)
    {
        $this->urbanCarsFactory       = $urbanCarsFactory;
        $this->competitionCarsFactory = $competitionCarsFactory;
    }

    public function __invoke()
    {
        $this->urbanCar       = $this->urbanCarsFactory->createUrbanCar('9999KPP', 'AUDI', 'A5');
        $this->competitionCar = $this->competitionCarsFactory->createCompetitionCar('FERRARI', '355 MARANELLO');

        $carsPreparedForDriving     = $this->prepareCarsForDriving($this->urbanCar, $this->competitionCar);
        $carPreparedForNightDriving = $this->prepareCarForNightDriving($this->urbanCar);
        $carsAlerted                = $this->alertOtherCars($this->urbanCar);
        $carsBoosted                = $this->boostCompetitionCar($this->competitionCar);

        return [
            "carsPrepared"                => $carsPreparedForDriving,
            "carsPreparedForNightDriving" => $carPreparedForNightDriving,
            "carsAlerted"                 => $carsAlerted,
            "carsBoosted"                 => $carsBoosted
        ];
    }

    private function prepareCarsForDriving(Car $urbanCar, Car $competitionCar): bool
    {
        $urbanCar->startEngine();
        $competitionCar->startEngine();

        if ($urbanCar->getEngineState() == $urbanCar::ENGINE_STARTED_STATE
            && $competitionCar->getEngineState() == $competitionCar::ENGINE_STARTED_STATE) {
            return true;
        }

        return false;
    }

    private function prepareCarForNightDriving(UrbanCar $urbanCar): bool
    {
        $urbanCar->turnLightsOn();
        if ($urbanCar->getLightsState() == $urbanCar::LIGHTS_ON_STATE) {
            return true;
        }

        return false;
    }

    private function alertOtherCars(UrbanCar $urbanCar): string
    {
        return $urbanCar->playTheClaxon();
    }

    private function boostCompetitionCar(CompetitionCar $competitionCar): string
    {
        return $competitionCar->turnOnTurbo();
    }
}