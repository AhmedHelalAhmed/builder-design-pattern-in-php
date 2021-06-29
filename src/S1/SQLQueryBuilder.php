<?php


namespace BuilderDesignPatternInPhp\S1;


abstract class SQLQueryBuilder
{
    /**
     * @var string
     */
    protected string $query;

    /**
     * @param string $table
     * @param array $fields
     * @return SQLQueryBuilder
     */
    protected function select(string $table, array $fields): SQLQueryBuilder
    {
        if (count($fields)) {
            $this->query = "SELECT " . implode(", ", $fields) . " FROM " . $table;
            return $this;
        }

        $this->query = "SELECT * FROM " . $table;
        return $this;
    }

    /**
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return SQLQueryBuilder
     */
    protected function where(string $field, string $value, string $operator = '='): SQLQueryBuilder
    {
        if ($field) {
            $this->query .= " $field $operator '$value'";
        }
        return $this;
    }

    abstract protected function limit(int $start, int $offset): SQLQueryBuilder;

    abstract public function createQuery(
        $selectTableName,
        $selectFields,
        $whereField,
        $whereValue,
        $whereOperator,
        $limitStart,
        $limitOffset
    ): QueryInterface;

}