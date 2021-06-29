<?php


namespace BuilderDesignPatternInPhp\S1;


interface QueryInterface
{
    public function getStatement(): string;
}