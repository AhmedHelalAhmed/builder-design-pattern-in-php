<?php


namespace BuilderDesignPatternInPhp;


use BuilderDesignPatternInPhp\Product\Types\Product;

class Director
{
    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function createProduct(): product
    {
        return $this->builder->getProduct();
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }
}