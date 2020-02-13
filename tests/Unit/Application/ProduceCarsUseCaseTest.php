<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Tests\Unit\Application;

use MarvinSoriano\AbstractFactoryPatternPHP\Application\ProduceCarsUseCase;
use MarvinSoriano\AbstractFactoryPatternPHP\Application\Service\CompetitionCarFactory;
use MarvinSoriano\AbstractFactoryPatternPHP\Application\Service\UrbanCarFactory;
use PHPUnit\Framework\TestCase;

final class ProduceCarsUseCaseTest extends TestCase
{
    private $urbanCarsFactory;
    private $competitionCarsFactory;
    private $sampleUrbanCar;
    private $sampleCompetitionCar;
    private $sampleCarLicensePlate     = '9999KPP';
    private $sampleUrbanCarBrand       = 'AUDI';
    private $sampleUrbanCarModel       = 'A5';
    private $sampleCompetitionCarBrand = 'FERRARI';
    private $sampleCompetitionCarModel = '355 MARANELLO';
    private CONST CLAXON_RESULT = 'MOOOOOOOOOCC !!';
    private CONST TURBO_RESULT = 'I AM SO FAST WITH TUUUUUUUUUURBOOOOOOOO !!!!';

    protected function setUp(): void
    {
        $this->urbanCarsFactory       = new UrbanCarFactory();
        $this->competitionCarsFactory = new CompetitionCarFactory();
        $this->sampleUrbanCar         = $this->urbanCarsFactory->createUrbanCar(
            $this->sampleCarLicensePlate,
            $this->sampleUrbanCarBrand,
            $this->sampleUrbanCarModel
        );
        $this->sampleCompetitionCar   = $this->competitionCarsFactory->createCompetitionCar(
            $this->sampleCompetitionCarBrand,
            $this->sampleCompetitionCarModel
        );
    }

    /**
     * @test
     */
    public function check_if_cars_are_prepared_for_driving()
    {
        $produceCarsUseCase = new ProduceCarsUseCase($this->urbanCarsFactory, $this->competitionCarsFactory);
        $useCaseResult = $produceCarsUseCase();

        $this->assertTrue($useCaseResult['carsPrepared']);
    }

    /**
     * @test
     */
    public function check_if_cars_are_prepared_for_night_driving()
    {
        $produceCarsUseCase = new ProduceCarsUseCase($this->urbanCarsFactory, $this->competitionCarsFactory);
        $useCaseResult = $produceCarsUseCase();

        $this->assertTrue($useCaseResult['carsPreparedForNightDriving']);
    }

    /**
     * @test
     */
    public function check_if_cars_are_alerted()
    {
        $produceCarsUseCase = new ProduceCarsUseCase($this->urbanCarsFactory, $this->competitionCarsFactory);
        $useCaseResult = $produceCarsUseCase();

        $this->assertEquals(self::CLAXON_RESULT, $useCaseResult['carsAlerted']);
    }

    /**
     * @test
     */
    public function check_if_car_is_boosted()
    {
        $produceCarsUseCase = new ProduceCarsUseCase($this->urbanCarsFactory, $this->competitionCarsFactory);
        $useCaseResult = $produceCarsUseCase();

        $this->assertEquals(self::TURBO_RESULT, $useCaseResult['carsBoosted']);
    }
}