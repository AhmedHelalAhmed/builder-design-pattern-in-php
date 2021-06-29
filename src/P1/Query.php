<?php


namespace BuilderDesignPatternInPhp\P1;


use Exception;

/**
 * Class Query
 * @package BuilderDesignPatternInPhp\P1
 * @author Ahmed Helal Ahmed
 */
class Query
{
    /**
     * @var string
     */
    private string $statement;

    const MYSQL='mysql';
    const POSTGRES='postgres';
    const SUPPORTED_TYPES=[self::MYSQL, self::POSTGRES];

    /**
     * Query constructor.
     * @param $type
     * @param $selectTableName
     * @param $selectFields
     * @param $whereField
     * @param $whereValue
     * @param $whereOperator
     * @param $limitStart
     * @param $limitOffset
     * @throws Exception
     */
    public function __construct(
        $type,
        $selectTableName,
        $selectFields,
        $whereField,
        $whereValue,
        $whereOperator,
        $limitStart,
        $limitOffset
    ) {
        $query = '';

        if (!in_array(strtolower($type),self::SUPPORTED_TYPES )) {
            throw new Exception("Type not supported yet");
        }

        if (!$selectTableName) {
            throw new Exception("table name must be provided");
        }

        if ($type == 'mysql') {
            if (count($selectFields)) {
                $query = "SELECT " . implode(", ", $selectFields) . " FROM " . $selectTableName;
            } else {
                $query = "SELECT * FROM " . $selectTableName;
            }

            if ($whereField) {
                $query .= "$whereField $whereOperator '$whereValue'";
            }

            if ($limitOffset) {
                $query .= " LIMIT " . $limitStart . ", " . $limitOffset;

            } elseif ($limitStart) {
                $query .= " LIMIT " . $limitStart;
            }

        } elseif ($type === 'postgres') {
            $query = "SELECT " . implode(", ", $selectFields) . " FROM " . $selectTableName;

            if ($whereField) {
                $query .= "$whereField $whereOperator '$whereValue'";
            }

            if ($limitOffset) {
                $query .= " LIMIT " . $limitStart . " OFFSET " . $limitOffset;
            } elseif ($limitStart) {
                $query .= " LIMIT " . $limitStart;
            }

        }

        $this->statement = $query . ';';
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return $this->statement;
    }
}