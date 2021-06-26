<?php


namespace BuilderDesignPatternInPhp;

use BuilderDesignPatternInPhp\Product\Types\Product;

abstract class Builder
{
    protected Product $product;

    abstract public function getProduct(): Product;

    abstract protected function buildProduct(): Models\Product;

    abstract protected function buildVariants(): array;

    abstract protected function buildMeasurementUnits(): array;

    abstract protected function buildTaxes(): array;
}