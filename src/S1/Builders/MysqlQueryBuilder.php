<?php


namespace BuilderDesignPatternInPhp\S1\Builders;


use BuilderDesignPatternInPhp\S1\Query;
use BuilderDesignPatternInPhp\S1\SQLQueryBuilder;

/**
 * Class MysqlQueryBuilder
 * @package BuilderDesignPatternInPhp\S1\Builders
 * @author Ahmed Helal Ahmed
 */
class MysqlQueryBuilder extends SQLQueryBuilder
{
    /**
     * @param $selectTableName
     * @param $selectFields
     * @param $whereField
     * @param $whereValue
     * @param $whereOperator
     * @param $limitStart
     * @param $limitOffset
     * @return Query
     */
    public function createQuery(
        $selectTableName,
        $selectFields,
        $whereField,
        $whereValue,
        $whereOperator,
        $limitStart,
        $limitOffset
    ): Query {
        $this->select($selectTableName, $selectFields)
            ->where($whereField, $whereValue, $whereOperator)
            ->limit($limitStart, $limitOffset);
        return new Query($this->query);
    }

    /**
     * @param int $start
     * @param int $offset
     * @return SQLQueryBuilder
     */
    public function limit(int $start, int $offset): SQLQueryBuilder
    {
        if ($offset) {
            $this->query .= " LIMIT " . $start . ", " . $offset;
            return $this;

        } elseif ($start) {
            $this->query .= " LIMIT " . $start;
            return $this;
        }
        return $this;
    }
}