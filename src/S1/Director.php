<?php


namespace BuilderDesignPatternInPhp\S1;


class Director
{
    private SQLQueryBuilder $builder;

    public function __construct(SQLQueryBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function createQuery(
        $selectTableName,
        $selectFields,
        $whereField,
        $whereValue,
        $whereOperator,
        $limitStart,
        $limitOffset
    ): QueryInterface {
        return $this->builder->createQuery(
            $selectTableName,
            $selectFields,
            $whereField,
            $whereValue,
            $whereOperator,
            $limitStart,
            $limitOffset);
    }

    public function changeBuilder(SQLQueryBuilder $builder)
    {
        $this->builder = $builder;
    }
}