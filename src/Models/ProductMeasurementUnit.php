<?php


namespace BuilderDesignPatternInPhp\Models;


class ProductMeasurementUnit
{
    private $product_id;
    private $unit_id;

    public function __construct($product_id, $unit_id)
    {
        $this->product_id = $product_id;
        $this->unit_id = $unit_id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     * @return ProductMeasurementUnit
     */
    public function setProductId($product_id): ProductMeasurementUnit
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnitId()
    {
        return $this->unit_id;
    }

    /**
     * @param mixed $unit_id
     * @return ProductMeasurementUnit
     */
    public function setUnitId($unit_id): ProductMeasurementUnit
    {
        $this->unit_id = $unit_id;
        return $this;
    }

}