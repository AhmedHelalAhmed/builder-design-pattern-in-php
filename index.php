<?php

require_once __DIR__ . '/vendor/autoload.php';

use BuilderDesignPatternInPhp\Builders\StandardBuilder;
use BuilderDesignPatternInPhp\Builders\VariantBuilder;
use BuilderDesignPatternInPhp\Director;

$director = new Director(new VariantBuilder());
$product = $director->createProduct();
var_dump($product);


$director->changeBuilder(new StandardBuilder());
$product = $director->createProduct();
var_dump($product);
