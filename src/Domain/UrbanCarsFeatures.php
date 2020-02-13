<?php

declare(strict_types=1);

namespace MarvinSoriano\AbstractFactoryPatternPHP\Domain;

interface UrbanCarsFeatures
{
    public function turnLightsOn(): void;

    public function turnLightsOff(): void;

    public function playTheClaxon(): string;
}
