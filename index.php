<?php
require_once "vendor/autoload.php";

use Luckas\DigitalCep\Search;


$busca = new Search;

$resultado = $busca->getAddressFromZipcode("53250050");

print_r($resultado);