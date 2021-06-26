<?php


namespace BuilderDesignPatternInPhp\Builders;


use BuilderDesignPatternInPhp\Builder;
use BuilderDesignPatternInPhp\Models\ProductMeasurementUnit;
use BuilderDesignPatternInPhp\Models\ProductTax;
use BuilderDesignPatternInPhp\Models\ProductVariant;
use BuilderDesignPatternInPhp\Product\Types\Product;
use BuilderDesignPatternInPhp\Product\Types\Standard;

class StandardBuilder extends Builder
{

    public function getProduct(): Product
    {
        $product = new Standard();
        $product
            ->setMeasurementUnits($this->buildMeasurementUnits())
            ->setTaxes($this->buildTaxes())
            ->setVariants($this->buildVariants());
        return $product;
    }

    protected function buildMeasurementUnits(): array
    {
        $measurementUnits = [];
        $measurementUnits[] = new ProductMeasurementUnit(1, 2);
        return $measurementUnits;
    }

    protected function buildTaxes(): array
    {
        $Taxes = [];
        $Taxes[] = new ProductTax(1, 3, '01-01-2021', '01-01-2023');
        return $Taxes;
    }

    protected function buildVariants(): array
    {
        $variants = [];
        $variants[] = new ProductVariant();
        return $variants;
    }

    protected function buildProduct(): \BuilderDesignPatternInPhp\Models\Product
    {
        return new \BuilderDesignPatternInPhp\Models\Product();
    }
}