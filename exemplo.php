<?php

require_once "vendor/autoload.php";

use Danso\DigitalCep\Search;

$busca = new Search();

$resultado = $busca->getAddressFromZipCode('08081040');

print_r($resultado);
