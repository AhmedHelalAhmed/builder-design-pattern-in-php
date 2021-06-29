<?php


namespace BuilderDesignPatternInPhp\S1;

/**
 * Class Query
 * @package BuilderDesignPatternInPhp\S1
 * @author Ahmed Helal Ahmed
 */
class Query implements QueryInterface
{
    /**
     * @var string
     */
    private string $statement;

    /**
     * Query constructor.
     * @param string $statement
     */
    public function __construct(string $statement)
    {
        $this->statement = $statement;
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
        return $this->statement;
    }

}