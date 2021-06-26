<?php


namespace BuilderDesignPatternInPhp\Models;


class ProductTax
{
    private $product_id;
    private $tax_id;
    private $start_date;
    private $end_date;

    public function __construct($product_id, $tax_id, $start_date, $end_date)
    {
        $this->product_id = $product_id;
        $this->tax_id = $tax_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
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
     * @return ProductTax
     */
    public function setProductId($product_id): ProductTax
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxId()
    {
        return $this->tax_id;
    }

    /**
     * @param mixed $tax_id
     * @return ProductTax
     */
    public function setTaxId($tax_id): ProductTax
    {
        $this->tax_id = $tax_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @param mixed $start_date
     * @return ProductTax
     */
    public function setStartDate($start_date): ProductTax
    {
        $this->start_date = $start_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * @param mixed $end_date
     * @return ProductTax
     */
    public function setEndDate($end_date): ProductTax
    {
        $this->end_date = $end_date;
        return $this;
    }
}