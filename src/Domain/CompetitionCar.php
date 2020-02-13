<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Domain;

final class CompetitionCar extends Car implements CompetitionCarsFeatures
{
    protected $brand;
    protected $model;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function turnOnTurbo(): string
    {
        return "I AM SO FAST WITH TUUUUUUUUUURBOOOOOOOO !!!!";
    }
}