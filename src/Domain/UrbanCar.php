<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Domain;

final class UrbanCar extends Car implements UrbanCarsFeatures
{
    CONST LIGHTS_OFF_STATE = "LIGHTS OFF";
    CONST LIGHTS_ON_STATE  = "LIGHTS ON";
    private $carLicensePlate;
    protected $brand;
    protected $model;
    private $lightsState;

    public function __construct(string $carLicensePlate, string $brand, string $model)
    {
        $this->carLicensePlate = $carLicensePlate;
        $this->brand           = $brand;
        $this->model           = $model;
        $this->lightsState     = self::LIGHTS_OFF_STATE;
    }

    /**
     * @return string
     */
    public function getCarLicensePlate(): string
    {
        return $this->carLicensePlate;
    }

    /**
     * @param string $carLicensePlate
     */
    public function setCarLicensePlate(string $carLicensePlate): void
    {
        $this->carLicensePlate = $carLicensePlate;
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

    /**
     * @return string
     */
    public function getLightsState(): string
    {
        return $this->lightsState;
    }

    public function turnLightsOn(): void
    {
        $this->lightsState = self::LIGHTS_ON_STATE;
    }

    public function turnLightsOff(): void
    {
        $this->lightsState = self::LIGHTS_OFF_STATE;
    }

    public function playTheClaxon(): string
    {
        return "MOOOOOOOOOCC !!";
    }
}