<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Domain;

abstract class Car
{
    CONST ENGINE_STARTED_STATE = 'STARTED';
    CONST ENGINE_STOPPED_STATE = 'STOPPED';

    protected $brand;
    protected $model;
    protected $engineState;

    public function __construct(string $brand, string $model)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->engineState = self::ENGINE_STOPPED_STATE;
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
    public function getEngineState(): string
    {
        return $this->engineState;
    }

    /**
     * @param string $engineState
     */
    private function setEngineState(string $engineState): void
    {
        $this->engineState = $engineState;
    }

    public function startEngine(): void
    {
        $this->setEngineState(self::ENGINE_STARTED_STATE);
    }

    public function stopEngine(): void
    {
        $this->setEngineState(self::ENGINE_STOPPED_STATE);
    }
}