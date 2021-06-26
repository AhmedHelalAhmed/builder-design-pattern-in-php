<?php


namespace BuilderDesignPatternInPhp\Product\Types;


abstract class Product
{
    protected array $variants;
    protected array $measurementUnits;
    protected array $taxes;

    /**
     * @param array $variants
     * @return Product
     */
    public function setVariants(array $variants): Product
    {
        $this->variants = $variants;
        return $this;
    }

    /**
     * @param array $taxes
     * @return Product
     */
    public function setTaxes(array $taxes): Product
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * @param array $measurementUnits
     * @return Product
     */
    public function setMeasurementUnits(array $measurementUnits): Product
    {
        $this->measurementUnits = $measurementUnits;
        return $this;
    }

}