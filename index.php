<?php

require_once __DIR__ . '/vendor/autoload.php';


use BuilderDesignPatternInPhp\P1\Query;
use BuilderDesignPatternInPhp\S1\Builders\MysqlQueryBuilder;
use BuilderDesignPatternInPhp\S1\Builders\PostgresQueryBuilder;
use BuilderDesignPatternInPhp\S1\Director;


$mysqlQuery = new Query("mysql",
    "users",
    ["name", "email", "password"],
    "age",
    18,
    ">",
    10,
    20);
echo ($mysqlQuery->getStatement());
echo "<br>";
$postgresQuery = new Query("postgres",
    "users",
    ["name", "email", "password"],
    "age",
    18,
    ">",
    10,
    20);
echo($postgresQuery->getStatement());
echo "<br><br><br>";



$director = new Director(new MysqlQueryBuilder());
$mysqlQuery = $director->createQuery(
    "users",
    ["name", "email", "password"],
    "age",
    18,
    ">",
    10,
    20
);
echo($mysqlQuery->getStatement());
echo "<br>";


$director->changeBuilder(new PostgresQueryBuilder());
$postgresQuery = $director->createQuery(
    "users",
    ["name", "email", "password"],
    "age",
    18,
    ">",
    10,
    20
);
echo($postgresQuery->getStatement());
echo "<br><br><br><br><br><br><br><br>";
